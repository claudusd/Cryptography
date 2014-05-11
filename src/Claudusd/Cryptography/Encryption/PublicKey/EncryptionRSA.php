<?php

namespace Claudusd\Cryptography\Encryption\PublicKey;

use Claudusd\Cryptography\Encryption\EncryptionInterface;

/**
 * @author Claude Dioudonnat
 */
class EncryptionRSA implements EncryptionInterface
{
    /**
     * {@inheritdoc}
     */
    public function encrypt($data, $key)
    {
        $publicKey = openssl_pkey_get_public($key);
        openssl_public_encrypt($data, $messageEncrypted, $publicKey);
        openssl_free_key($publicKey);
        return $messageEncrypted;
    }

    /**
     * {@inheritdoc}
     */
    public function decrypt($data, $key, $passphrase = '')
    {
        $privateKey = openssl_pkey_get_private($key, $passphrase);
        openssl_private_decrypt($data, $messageDecrypted, $privateKey);
        openssl_free_key($privateKey);
        return $messageDecrypted;
    }
}