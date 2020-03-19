<?php
include 'phpqrcode/qrlib.php';
$key = "As3UNLbXT2BBPmrbgQhCwSQRZwVrH4sN";
$response = array();
$response["name"] = "Pegawai 1";
$response["email"] = "pegawai1@pasar.id";
$response["alamat"] = "Jl. Panjang No.16, Kelurahan kebon jeruk, jakarta barat, DKI Jakarta";
$response["telp"] = "081234567890";
		    
$data = json_encode($response);

//encrypt data
$ivlen = openssl_cipher_iv_length($cipher="AES-256-CBC");
$iv = openssl_random_pseudo_bytes($ivlen);
$ciphertext_raw = openssl_encrypt($data, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);
$hmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary=true);
$ciphertext = base64_encode( $iv.$hmac.$ciphertext_raw );

//sign data
$pkeyid = openssl_pkey_get_private("-----BEGIN RSA PRIVATE KEY-----
MIIBOwIBAAJBAKLblZhyKHsXjcVw8XaydTN/Y6lRllTb/brw+bENDLrzmL9Goi2h
Xxds9+dcHwjdu7gVFDf+Xh+R7KotLH/gIlMCAwEAAQJAfIjTrT5mjDInvDqwuqae
juG0ES8NeRi8vu400dn7yRzzgXBSdDUMl/3Cn3o6kuGOkIuoyELZ34iMyFwWIAO6
yQIhAM1jR6MbJ3M9oj2dgn64/QqwUSnZt8xLVg55g6zvnHJlAiEAyv1UsrN8WpUE
iN1sUdFtaU4LIMGXl0cPYOkjFRjLGlcCIQC2md+k2Y13XYKSuSi9tYXzLNLcHF7W
WNxHvi0dYWJ8KQIhAICqhTZkiK1OCbrLR26xJf36xxjzPShZlYjjHiawOYUvAiB/
n7P74Y/noyb8FhkmFovdGzpvnr+WbELawQ0n5iQXyg==
-----END RSA PRIVATE KEY-----
");
// compute signature
openssl_sign($ciphertext, $signature, $pkeyid, "sha256WithRSAEncryption");
// free the key from memory
openssl_free_key($pkeyid);
//echo $ciphertext.".".base64_encode($signature);
QRcode::png('FXMAaq6dHzRbNTBmwgVh/8OGo9pEUh72ARht2lH/s1AtIQRI26V409TMJdFwCtsePJgEk62B6J0ueVgfNWlYpif7v10oez/mNQCCUqhNN2PsaIaknTWZUPHxBLgJ7WigQXEpFF+yn3FW0WZoKRd2PSNsniY+nYZF1wGgT2+4d+P7FGp5K8hVq00S3/+AO5DX7WOi64R4EirxyoxeLqYIJpZtpaEVtIpbn3sEtK/U/iRYrMrtwi6soTEgFCbGc2RfwjpJSBZBSlqav7ZXe+781w==.dScG1FWk8RXls16amh1LZHjQrOlhVN5hrMq46z6fkf/Fghmspy4Ppt+MU05OLI12BK9kg7fevWbvR/kFv7LHhA==');