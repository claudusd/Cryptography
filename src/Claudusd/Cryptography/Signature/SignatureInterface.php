<?php

namespace Claudusd\Cryptography\Signature;

/**
 * Interface to implement the signature system for verify data.
 * @author Claude Dioudonnat
 */
interface SignatureInterface 
{
    /**
     * The method to use to sign data.
     * @param string The value to sign.
     * @param string The key to use for sign.
     * @return string The signature generated.
     */
    public function sign($data, $key);

    /**
     * The method to use to verify data.
     * @param string The data of the signature to verify.
     * @param string The signature to verify.
     * @param string The key to use to verify.
     * @return string True is is authentic else false.
     */
    public function verify($data, $signature, $key);
}