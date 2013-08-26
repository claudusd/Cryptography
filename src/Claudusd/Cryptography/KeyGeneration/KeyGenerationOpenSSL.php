<?php

namespace Claudusd\Cryptography\KeyGeneration;

use Claudusd\Cryptography\Exception\KeyGenerationException;

/**
 * 
 * @author Claude Dioudonnat
 */
abstract class KeyGenerationOpenSSL extends KeyGeneration
{
    public function __construct($passphrase = null) 
    {
        $res = openssl_pkey_new($this->getConfig());
        openssl_pkey_export($res, $privKey, $passphrase);
        $this->privateKey = $privKey;
        $pubKey = openssl_pkey_get_details($res);
        $this->publicKey = $pubKey["key"];
    }

    abstract protected function getConfig();
}