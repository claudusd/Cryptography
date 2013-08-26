<?php

namespace Claudusd\Cryptography\Tests\Encryption;

use Claudusd\Cryptography\Tests\CryptographyTest;

use Claudusd\Cryptography\Encryption\PublicKey\EncryptionRSA;
use Claudusd\Cryptography\KeyGeneration\Implementation\KeyGenerationSHA512RSA4096Bits;

class EncryptionRSATest extends CryptographyTest
{
    public function testEncryptionDecryptionRSA()
    {
        $encryption = new EncryptionRSA();

        $this->assertInstanceOf('Claudusd\Cryptography\Encryption\EncryptionInterface', $encryption);

        $message = 'MESSAGE TOP SECRET';

        $key1 = new KeyGenerationSHA512RSA4096Bits();
        $messageEncrypted = $encryption->encrypt($message, $key1->getPublicKey());
        $this->assertNotEquals($message, $messageEncrypted);
        $messageDeCrypted = $encryption->decrypt($messageEncrypted, $key1->getPrivateKey());
        $this->assertEquals($message, $messageDeCrypted);
    }

    public function testEncryptionDecryptionRSAWithPassphrase()
    {
        $encryption = new EncryptionRSA();

        $this->assertInstanceOf('Claudusd\Cryptography\Encryption\EncryptionInterface', $encryption);

        $message = 'MESSAGE TOP SECRET';
        $passphrase = 'my passphrase';

        $key1 = new KeyGenerationSHA512RSA4096Bits($passphrase);
        $messageEncrypted = $encryption->encrypt($message, $key1->getPublicKey());
        $this->assertNotEquals($message, $messageEncrypted);
        $messageDeCrypted = $encryption->decrypt($messageEncrypted, $key1->getPrivateKey(), $passphrase);
        $this->assertEquals($message, $messageDeCrypted);
    }
}