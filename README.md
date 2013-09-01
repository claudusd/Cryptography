Cryptography
============

This is a PHP5 library about the cryptography. The library uses the PHP openssl methods.

[![Build Status](https://travis-ci.org/claudusd/Cryptography.png?branch=master)](https://travis-ci.org/claudusd/Cryptography)

### Installation ###

The recommended way to install Cryptography is through composer ([claudusd/cryptography](https://packagist.org/packages/claudusd/cryptography) on packagist)

Just create a `composer.json` file for your project:

``` json
{
    "require": {
        "claudusd/cryptography": "*"
    }
}
```

And run these two commands to install it:

``` bash
$ curl -sS https://getcomposer.org/installer | php
$ composer install
```

Now you can add the autoloader, and you will have access to the library:

``` php
<?php

require 'vendor/autoload.php';
```

Usage
=====

### Key Generation ###

This part of the library is used for key generation for the public key encryption.

The `KeyGeneration` abstract class have the methods `getPrivateKey()` to get the `private key` and `getPublicKey()` to get the `public key`.

#### Implementation ####

The library have a default implementation for generation key for RSA encryption with 4096 bits's lenght. Each instance of this class generates a new pair of key.

### Encryption/Decryption ###

The class for encryption and decryption implement the interface `EncryptionInterface` and use two methods, `encrypt()` and `decrypt()`.

#### Implementation ####

By default the library have 2 implementations :

* The First is a symmectric key encryption with the algorythm AES 256 CBC.
* The second is a public key encryption for any RSA' key lenght.

### Hash ###

The class for hash implement the interface `HashInterface` and use the method `hash()`.

#### Implementation ####

By default the library implement the SHA1 hash.

### Signature ###

The signature class implement the interface `SignatureInterface` and use two methods, `sign()` and `verify()`.

#### Implementation #####

By default the library implement the data sign with a private key and verify with a public key.