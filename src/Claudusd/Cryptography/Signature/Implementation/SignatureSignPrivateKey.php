<?php

namespace Claudusd\Cryptography\Signature\Implementation;

use Claudusd\Cryptography\Signature\SignatureInterface;

class SignatureSignPrivateKey implements SignatureInterface
{
     public function sign($data, $key, $passphrase = '')
     {
        $privateKey = openssl_pkey_get_private($key, $passphrase);
        openssl_sign($data, $signature, $privateKey);
        openssl_free_key($privateKey);
        return $signature;
     }

     public function verify($data, $signature, $key, $passphrase = null)
     {
        $publicKey = openssl_pkey_get_public($key);
        $verify = openssl_verify($data, $signature, $publicKey);
        openssl_free_key($publicKey);
        if($verify == 1)
            return true;
        return false;
     }
}