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
        $config = $this->getConfig();
        try {
            $res = openssl_pkey_new($config);
        } catch(\ErrorException $e) {
            throw new KeyGenerationException(true);
        }
        if(!openssl_pkey_export($res, $privKey, $passphrase)) {
            throw new KeyGenerationException(true);
        }
        $this->privateKey = $privKey;
        $pubKey = openssl_pkey_get_details($res);
        $this->publicKey = $pubKey["key"];
    }

    abstract protected function getConfig();
}