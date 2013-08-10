<?php

namespace Claudusd\Cryptography\Tests\Encryption;

use Claudusd\Cryptography\Tests\CryptographyTest;

use Claudusd\Cryptography\Encryption\SymmetricKey\EncryptionAES256;

class EncryptionTest extends CryptographyTest
{
    public function testEncryptionDecryptionAES256()
    {
        $encryption = new EncryptionAES256();

        $this->assertInstanceOf('Claudusd\Cryptography\Encryption\EncryptionInterface', $encryption);

        $key = 'my key';
        $wrongKey = 'wrong key';
        $message = 'my message';

        $encryptedMessage = $encryption->encrypt($message, $key);
        $this->assertNotEquals($message, $encryptedMessage);
        $this->assertNotEquals($message, $encryption->decrypt($encryptedMessage, $wrongKey));
        $this->assertEquals($message, $encryption->decrypt($encryptedMessage, $key));
    }
}