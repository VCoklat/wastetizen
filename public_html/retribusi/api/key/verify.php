<?php

if ( !isset( $_POST["token"] ) || empty( $_POST["token"] ) ) {
    http_response_code(400);
    exit();
}

$data = explode(".", $_POST["token"]);
if ( count($data) !== 2 ) {
    http_response_code(400);
    exit();
}

$pkeyid = openssl_pkey_get_public("-----BEGIN RSA PRIVATE KEY-----
MIIBOwIBAAJBAKLblZhyKHsXjcVw8XaydTN/Y6lRllTb/brw+bENDLrzmL9Goi2h
Xxds9+dcHwjdu7gVFDf+Xh+R7KotLH/gIlMCAwEAAQJAfIjTrT5mjDInvDqwuqae
juG0ES8NeRi8vu400dn7yRzzgXBSdDUMl/3Cn3o6kuGOkIuoyELZ34iMyFwWIAO6
yQIhAM1jR6MbJ3M9oj2dgn64/QqwUSnZt8xLVg55g6zvnHJlAiEAyv1UsrN8WpUE
iN1sUdFtaU4LIMGXl0cPYOkjFRjLGlcCIQC2md+k2Y13XYKSuSi9tYXzLNLcHF7W
WNxHvi0dYWJ8KQIhAICqhTZkiK1OCbrLR26xJf36xxjzPShZlYjjHiawOYUvAiB/
n7P74Y/noyb8FhkmFovdGzpvnr+WbELawQ0n5iQXyg==
-----END RSA PRIVATE KEY-----
");
$ok = openssl_verify($data[0], base64_decode($data[1]), $pkeyid, "sha256WithRSAEncryption");
if ( $ok === 1 ) {
    http_response_code(204);
} else {
    http_response_code(400);
}
openssl_free_key($pkeyid);
