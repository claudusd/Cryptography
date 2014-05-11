<?php

namespace Claudusd\Cryptography\KeyGeneration;

use Claudusd\Cryptography\Exception\KeyGenerationException;

/**
 * It's to generate a new pair of keys from openssl method. See the method {@link getConfig()} to use it.
 * @author Claude Dioudonnat
 * @link http://www.php.net/manual/en/function.openssl-pkey-new.php openssl_pkey_new
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

    /**
     * @return array The configuration for creation the pair of key.
     */
    abstract protected function getConfig();
}