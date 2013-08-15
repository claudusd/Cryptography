<?php

namespace Claudusd\Cryptography\KeyGeneration\Implementation;

use Claudusd\Cryptography\KeyGeneration\KeyGenerationOpenSSL;

class KeyGenerationSHA512RSA4096Bits extends KeyGenerationOpenSSL
{
    protected function getConfig() 
    {
        return array(
            "digest_alg" => "sha512",
            "private_key_bits" => 4096,
            "private_key_type" => OPENSSL_KEYTYPE_RSA,
        );
    }
}