<?php

namespace Claudusd\Cryptography\Tests\Encryption;

use Claudusd\Cryptography\KeyGeneration\Implementation\KeyGenerationSHA512RSA4096Bits;
use Claudusd\Cryptography\Signature\Implementation\SignatureSignPrivateKey;
use Claudusd\Cryptography\Tests\CryptographyTest;

class SignatureSignPrivateKeyTest extends CryptographyTest
{
    public function testSignature()
    {
        $key = new KeyGenerationSHA512RSA4096Bits();
        $signature = new SignatureSignPrivateKey();
        $data1 = 'my data 1';
        $signatureData1 = $signature->sign($data1, $key->getPrivateKey());
        $this->assertNotEquals($data1, $signatureData1);

        $data2 = 'my data 2';
        $signatureData2 = $signature->sign($data2, $key->getPrivateKey());
        $this->assertNotEquals($signatureData1, $signatureData2);

        $this->assertTrue($signature->verify($data1, $signatureData1, $key->getPublicKey()));
    }
}