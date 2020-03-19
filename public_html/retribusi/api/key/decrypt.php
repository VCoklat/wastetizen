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

$key = "As3UNLbXT2BBPmrbgQhCwSQRZwVrH4sN";

//decrypt data
$bdata = base64_decode($data[0]);
$ivlen = openssl_cipher_iv_length($cipher="AES-256-CBC");
$iv = substr($bdata, 0, $ivlen);
$hmac = substr($bdata, $ivlen, $sha2len=32);
$ciphertext_raw = substr($bdata, $ivlen+$sha2len);
$original_plaintext = openssl_decrypt($ciphertext_raw, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);
$calcmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary=true);
if (hash_equals($hmac, $calcmac))
{
    echo $original_plaintext;
} else {
    http_response_code(400);
    exit();
}
