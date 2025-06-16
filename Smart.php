<?php
header('Content-Type: application/json;charset=utf-8');
/**
 * @date: 2024年03月04日 14:35:11
 * @msg: Smart代理
 */

$url = $_GET['url'] ?? null;
$ts = $_GET['ts'] ?? null;

try {
    if (isset($url) && !empty($url) && filter_var($url, FILTER_VALIDATE_URL)) {
        $uri = parse_url($url)['path'];
        $tid = 'M' . getRandomStr(19);
        $day = floor((time() * 1000 + rand(1, 999)) / 1000 / 3600 / 24);
        $sum = md5('tvata nginx auth module' . $uri . $tid . $day);
        $live = $url . '?tid=' . $tid . '&ct=' . $day . '&tsum=' . $sum;
        $m3u8Data = getData($live);
        
        if (strpos($m3u8Data, "EXTM3U") !== false) {
            $m3u8s = explode("\n", $m3u8Data);
            $output = '';

            foreach ($m3u8s as $v) {
                $v = str_replace("\r", '', $v);
                if (strpos($v, ".ts") !== false) {
                    $tsUrl = dirname($url) . '/' . $v;
                    $output .= getScriptUrl() . "?ts=" . $tsUrl . "\n";
                } elseif (!empty($v)) {
                    $output .= $v . "\n";
                }
            }
        } else {
            http_response_code(500);
            logError('Invalid M3U8 data', $live);
            die(json_encode(['error' => 'Invalid M3U8 data']));
        }
    } elseif (isset($ts) && !empty($ts) && filter_var($ts, FILTER_VALIDATE_URL)) {
        $output = getData($ts);
        if ($output === '') {
            http_response_code(500);
            logError('Failed to retrieve TS file', $ts);
            die(json_encode(['error' => 'Failed to retrieve TS file']));
        }
    } else {
        http_response_code(400);
        die(json_encode(['error' => 'Bad Request']));
    }

    echo $output;
} catch (Exception $e) {
    http_response_code(500);
    logError('Unhandled Exception', $e->getMessage());
    die(json_encode(['error' => 'Internal Server Error']));
}

function getRandomStr($len)
{
    $chars = 'abcdef0123456789';
    $charsLen = strlen($chars);
    $str = '';
    for ($i = 0; $i < $len; $i++) {
        $str .= $chars[random_int(0, $charsLen - 1)];
    }
    return $str;
}

function getScriptUrl(): string
{
    $httpType = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ||
        (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https')
        ? 'https://'
        : 'http://';

    return $httpType . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'];
}

function getData($url)
{
    $context = stream_context_create([
        'http' => [
            'timeout' => 10,  // 设置超时时间为10秒
        ]
    ]);
    $data = @file_get_contents($url, false, $context);
    if ($data === false) {
        logError('Failed to fetch data', $url);
        return '';
    }
    return $data;
}

function logError($message, $detail)
{
    error_log(date('[Y-m-d H:i:s] ') . "Error: $message - Detail: $detail" . PHP_EOL, 3, 'error.log');
}