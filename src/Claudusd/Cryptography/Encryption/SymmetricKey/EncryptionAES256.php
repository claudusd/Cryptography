<?php

namespace Claudusd\Cryptography\Encryption\SymmetricKey;

use Claudusd\Cryptography\Encryption\EncryptionInterface;

/**
 * @author Claude Dioudonnat
 */
class EncryptionAES256 implements EncryptionInterface
{
    /** */
    private $iv;

    /** */
    private $algorithm;

    /**
     *
     */
    public function __construct()
    {
        $size = mcrypt_get_iv_size(MCRYPT_CAST_256, MCRYPT_MODE_CFB);
        $this->iv = mcrypt_create_iv($size, MCRYPT_DEV_RANDOM);
        $this->algorithm = 'AES-256-CBC';
    }
    /**
     * {@inheritdoc}
     */
    public function encrypt($data, $key)
    {
        return openssl_encrypt($data, $this->algorithm, $key, true, $this->iv);
    }

    /**
     * {@inheritdoc}
     */
    public function decrypt($data, $key, $passphrase = null)
    {
        return openssl_decrypt($data, $this->algorithm, $key, true, $this->iv);
    }
}