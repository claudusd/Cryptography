<?php

namespace Claudusd\Cryptography\KeyGeneration\Implementation;

use Claudusd\Cryptography\KeyGeneration\KeyGeneration;

class KeyGenerationSHA512Bits4096 extends KeyGeneration
{
    public function __construct($passphrase = null) 
    {
        $config = array(
            "digest_alg" => "sha512",
            "private_key_bits" => 4096,
            "private_key_type" => OPENSSL_KEYTYPE_RSA,
        );
        $res = openssl_pkey_new($config);
        openssl_pkey_export($res, $privKey, $passphrase);
        $this->privateKey = $privKey;
        $pubKey = openssl_pkey_get_details($res);
        $this->publicKey = $pubKey["key"];
    }
}