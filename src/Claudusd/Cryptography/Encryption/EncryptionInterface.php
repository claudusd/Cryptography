<?php

namespace Claudusd\Cryptography\Encryption;

/**
 * Interface to implement the encryption system for a encryption way.
 * @author Claude Dioudonnat
 */
interface EncryptionInterface 
{
	/**
	 * The method to use to encrypt something.
	 * @param string The value to encrypt.
	 * @param string The key to use for encrypt.
	 * @return string The value encrypted.
	 */
	public function encrypt($message, $key);

	/**
	 * The method to use to decrypt something.
	 * @param string The value encrypted.
	 * @param string The key to use to decrypt.
	 * @return string The value decrypted.
	 */
	public function decrypt($message, $key);
}