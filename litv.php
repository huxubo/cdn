<?php
header('Content-Type: text/json;charset=utf-8');
/**
 * @author: 簡單
 * @link: http://log.37o.cc
 * @date: 2024年06月14日 00:03:13
 * @msg: litv
 */
echo password_hash('admin', PASSWORD_DEFAULT);

$channels = [
    '4gtv-4gtv001' => ['民视台湾台', 1, 6],
    '4gtv-4gtv002' => ['民视', 1, 10],
    '4gtv-4gtv003' => ['民视第一台', 1, 6],
    '4gtv-4gtv004' => ['民视综艺', 1, 8],
    '4gtv-4gtv006' => ['猪哥亮歌厅秀', 1, 9],
    '4gtv-4gtv009' => ['中天新闻', 2, 7],
    '4gtv-4gtv010' => ['非凡新闻', 1, 2],
    '4gtv-4gtv011' => ['影迷數位電影台', 1, 6],
    '4gtv-4gtv013' => ['視納華仁紀實頻道', 1, 2],
    '4gtv-4gtv014' => ['时尚运动X', 1, 5],
    '4gtv-4gtv016' => ['GLOBETROTTER', 1, 6],
    '4gtv-4gtv017' => ['amc电影台', 1, 6],
    '4gtv-4gtv018' => ['达文西频道', 1, 10],
    '4gtv-4gtv034' => ['八大精彩台', 1, 6],
    '4gtv-4gtv039' => ['八大综艺台', 1, 7],
    '4gtv-4gtv040' => ['中视', 1, 6],
    '4gtv-4gtv041' => ['华视', 1, 6],
    '4gtv-4gtv042' => ['公视戏剧', 1, 6],
    '4gtv-4gtv043' => ['客家电视台', 1, 6],
    '4gtv-4gtv044' => ['靖天卡通台', 1, 8],
    '4gtv-4gtv045' => ['靖洋戏剧台', 1, 6],
    '4gtv-4gtv046' => ['靖天综合台', 1, 8],
    '4gtv-4gtv047' => ['靖天日本台', 1, 8],
    '4gtv-4gtv048' => ['非凡商业', 1, 2],
    '4gtv-4gtv049' => ['采昌影剧', 1, 8],
    '4gtv-4gtv051' => ['台视新闻', 1, 6],
    '4gtv-4gtv052' => ['华视新闻', 1, 2],
    '4gtv-4gtv053' => ['GinxTV', 1, 8],
    '4gtv-4gtv054' => ['靖天欢乐台', 1, 8],
    '4gtv-4gtv055' => ['靖天映画', 1, 8],
    '4gtv-4gtv056' => ['台视财经', 1, 2],
    '4gtv-4gtv057' => ['靖洋卡通台', 1, 8],
    '4gtv-4gtv058' => ['靖天戏剧台', 1, 8],
    '4gtv-4gtv059' => ['古典音乐台', 1, 6],
    '4gtv-4gtv061' => ['靖天电影台', 1, 7],
    '4gtv-4gtv062' => ['靖天育乐台', 1, 8],
    '4gtv-4gtv063' => ['靖天国际台', 1, 6],
    '4gtv-4gtv064' => ['中视菁采', 1, 8, 140000],
    '4gtv-4gtv065' => ['靖天资讯台', 1, 8],
    '4gtv-4gtv066' => ['台视', 1, 2],
    '4gtv-4gtv067' => ['tvbs精采台', 1, 8],
    '4gtv-4gtv068' => ['tvbs欢乐台', 1, 7],
    '4gtv-4gtv070' => ['爱尔达娱乐', 1, 7],
    '4gtv-4gtv072' => ['tvbs新闻台', 1, 2],
    '4gtv-4gtv073' => ['tvbs', 1, 2],
    '4gtv-4gtv074' => ['中视新闻', 1, 2],
    '4gtv-4gtv075' => ['镜新闻', 1, 6],
    '4gtv-4gtv076' => ['CATCHPLAY电影台', 1, 2],
    '4gtv-4gtv077' => ['TRACE SPORTS STARS', 1, 7],
    '4gtv-4gtv079' => ['阿里郎', 1, 2],
    '4gtv-4gtv080' => ['中视经典', 1, 5],
    '4gtv-4gtv082' => ['TRACE URBAN', 1, 7],
    '4gtv-4gtv083' => ['MEZZO LIVE', 1, 6],
    '4gtv-4gtv084' => ['国会频道1', 1, 6],
    '4gtv-4gtv085' => ['国会频道2', 1, 5],
    '4gtv-4gtv101' => ['智林体育台', 1, 6],
    '4gtv-4gtv104' => ['国际财经', 1, 7],
    '4gtv-4gtv109' => ['第1商業台', 1, 7],
    '4gtv-4gtv152' => ['东森新闻', 1, 6],
    '4gtv-4gtv153' => ['东森财经新闻', 1, 6],
    '4gtv-4gtv155' => ['民视', 1, 6],
    '4gtv-4gtv156' => ['民视台湾台', 1, 2],
    'litv-ftv03' => ['美国之音', 1, 7],
    'litv-ftv07' => ['民视旅游', 1, 7],
    'litv-ftv09' => ['民视影剧', 1, 7],
    'litv-ftv10' => ['半岛新闻', 1, 7],
    'litv-ftv13' => ['民视新闻台', 1, 7],
    'litv-ftv15' => ['爱放动漫', 1, 7],
    'litv-ftv16' => ['好消息', 1, 2],
    'litv-ftv17' => ['好消息2台', 1, 2],
    'litv-longturn01' => ['龙华卡通', 4, 2],
    'litv-longturn03' => ['龙华电影', 5, 2],
    'litv-longturn04' => ['博斯魅力', 5, 2],
    'litv-longturn05' => ['博斯高球1', 5, 2],
    'litv-longturn06' => ['博斯高球2', 5, 2],
    'litv-longturn07' => ['博斯运动1', 5, 2],
    'litv-longturn08' => ['博斯运动2', 5, 2],
    'litv-longturn09' => ['博斯网球', 5, 2],
    'litv-longturn10' => ['博斯无限', 5, 2],
    'litv-longturn11' => ['龙华日韩', 5, 2],
    'litv-longturn12' => ['龙华偶像', 5, 2],
    'litv-longturn13' => ['博斯无限2', 4, 2],
    'litv-longturn14' => ['寰宇新闻台', 1, 6],
    'litv-longturn15' => ['寰宇新闻台湾台', 5, 2],
    'litv-longturn17' => ['亚洲旅游台', 5, 2],
    'litv-longturn18' => ['龙华戏剧', 5, 2],
    'litv-longturn19' => ['Smart知识台', 5, 2],
    'litv-longturn20' => ['生活英语台', 5, 2],
    'litv-longturn21' => ['龙华经典', 5, 2],
    'litv-longturn22' => ['台湾戏剧台', 5, 2],
];

$id = $_GET['id'] ?? null;
$ts = $_GET['ts'] ?? null;

if ($id) {
    $time = time();
    $mp4 = $channels[$id][3] ?? '134000';
    $seqTs = intval(($time - 1420070500) / 4);
    $chunkTs = $seqTs * 4;

    $playlist = "#EXTM3U\r\n";
    $playlist .= "#EXT-X-VERSION:3\r\n";
    $playlist .= "#EXT-X-TARGETDURATION:4\r\n";
    $playlist .= "#EXT-X-MEDIA-SEQUENCE:{$seqTs}\r\n";

    for ($i = 0; $i < 7; $i++) {
        $playlist .= "#EXTINF:4,\r\n";
        $segmentUrl = "https://litvpc-hichannel.cdn.hinet.net/live/pool/{$id}/litv-pc/{$id}-avc1_6000000={$channels[$id][1]}-mp4a_{$mp4}_zho={$channels[$id][2]}-begin={$chunkTs}0000000-dur=40000000-seq={$seqTs}.ts";
        // $playlist .= $segmentUrl . "\r\n";
        $playlist .= getScriptUrl() . "?ts=" . $segmentUrl . "\r\n";
        $seqTs++;
        $chunkTs += 4;
    }

    header('Content-Type: application/vnd.apple.mpegurl');
    echo $playlist;
} elseif ($ts) {
    $segment = zxCurl($ts);
    header('Content-Type: video/MP2T');
    echo $segment;
} elseif (isset($_GET['list'])) {
    $list = '4G-LITV,#genre#' . PHP_EOL;
    foreach ($channels as $key => $value) {
        $list .= $value[0] . ',' . getScriptUrl() . '?id=' . $key . PHP_EOL;
    }
    echo $list;
}

function getScriptUrl()
{
    $http = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') || (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') ? 'https://' : 'http://';
    return $http . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'];
}

function zxCurl($url, $headers = ['User-Agent: okhttp/3.15'])
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}
