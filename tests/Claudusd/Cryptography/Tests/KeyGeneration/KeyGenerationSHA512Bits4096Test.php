<?php

namespace Claudusd\Cryptography\Tests\KeyGeneration;

use Claudusd\Cryptography\Tests\CryptographyTest;

use Claudusd\Cryptography\KeyGeneration\Implementation\KeyGenerationSHA512RSA4096Bits;
use Claudusd\Cryptography\Tests\KeyGeneration\Implementation\KeyGenerationFirstException;

class KeyGenerationSHA512Bits4096Test extends CryptographyTest
{
    public function testKey()
    {
        $keyGeneration = new KeyGenerationSHA512RSA4096Bits();

        $this->assertNotNull($keyGeneration->getPublicKey());
        $this->assertNotNull($keyGeneration->getPrivateKey());
    }

    public function testFirstException()
    {
        $keyGeneration = new KeyGenerationFirstException();
        $this->setExpectedException('KeyGenerationException');
    }
}