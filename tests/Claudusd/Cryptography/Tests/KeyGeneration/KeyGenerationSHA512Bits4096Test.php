<?php

namespace Claudusd\Cryptography\Tests\KeyGeneration;

use Claudusd\Cryptography\Tests\CryptographyTest;

use Claudusd\Cryptography\KeyGeneration\Implementation\KeyGenerationSHA512RSA4096Bits;
use Claudusd\Cryptography\Tests\KeyGeneration\Implementation\KeyGenerationFirstException;

class KeyGenerationSHA512Bits4096Test extends CryptographyTest
{
    public function testKey()
    {
        $keyGeneration1 = new KeyGenerationSHA512RSA4096Bits();

        $this->assertNotNull($keyGeneration1->getPublicKey());
        $this->assertNotNull($keyGeneration1->getPrivateKey());

        $keyGeneration2 = new KeyGenerationSHA512RSA4096Bits('toto');
        $this->assertNotNull($keyGeneration2->getPublicKey());
        $this->assertNotNull($keyGeneration2->getPrivateKey());

        $this->assertNotEquals($keyGeneration1->getPublicKey(), $keyGeneration2->getPublicKey());
        $this->assertNotEquals($keyGeneration1->getPrivateKey(), $keyGeneration2->getPrivateKey());       
    }
}