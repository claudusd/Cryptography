<?php

namespace Claudusd\Cryptography\Hash\Implementation;

use Claudusd\Cryptography\Hash\HashInterface;

/**
 * @author Claude Dioudonnat
 */
class SHA1 implements HashInterface
{
    /**
     * {@inheritdoc}
     */
    public function hash($value, $salt = null)
    {
        if(file_exists($value)) {
            return sha1_file($value);
        }
        if(!is_null($salt) && is_string($salt)) {
            $value = $value.$salt;
        }
        return sha1($value);
    }
}