<?php

namespace Claudusd\Cryptography\KeyGeneration;

/**
 * 
 * @author Claude Dioudonnat
 */
abstract class KeyGeneration
{
    /**
     *
     */
    protected $privateKey;

    /**
     *
     */
    protected $publicKey;

    /**
     *
     * @return string The private key.
     */
    public function getPrivateKey()
    {
        return $this->privateKey;
    }

    /**
     * 
     * @return string The public key.
     */
    public function getPublicKey()
    {
        return $this->publicKey;
    }
}