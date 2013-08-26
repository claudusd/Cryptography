<?php

namespace Claudusd\Cryptography\Tests\KeyGeneration\Implementation;

use Claudusd\Cryptography\Exception\KeyGenerationException;
use Claudusd\Cryptography\KeyGeneration\KeyGenerationOpenSSL;

class KeyGenerationFirstException extends KeyGenerationOpenSSL
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