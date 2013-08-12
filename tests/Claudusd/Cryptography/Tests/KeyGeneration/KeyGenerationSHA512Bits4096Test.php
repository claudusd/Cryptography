<?php

namespace Claudusd\Cryptography\Tests\Encryption;

use Claudusd\Cryptography\Tests\CryptographyTest;

use Claudusd\Cryptography\KeyGeneration\Implementation\KeyGenerationSHA512Bits4096;

class KeyGenerationSHA512Bits4096Test extends CryptographyTest
{
    public function testKey()
    {
        $keyGeneration = new KeyGenerationSHA512Bits4096();

        $this->assertNotNull($keyGeneration->getPublicKey());
        $this->assertNotNull($keyGeneration->getPrivateKey());
    }
}