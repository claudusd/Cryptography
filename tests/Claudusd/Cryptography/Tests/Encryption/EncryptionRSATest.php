<?php

namespace Claudusd\Cryptography\Tests\Encryption;

use Claudusd\Cryptography\Tests\CryptographyTest;

use Claudusd\Cryptography\Encryption\PublicKey\EncryptionRSA;

class EncryptionRSATest extends CryptographyTest
{
    public function testEncryptionDecryptionRSA()
    {
        $encryption = new EncryptionRSA();

        $this->assertInstanceOf('Claudusd\Cryptography\Encryption\EncryptionInterface', $encryption);

        
    }
}