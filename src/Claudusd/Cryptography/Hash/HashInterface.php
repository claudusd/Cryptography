<?php

namespace Claudusd\Cryptography\Hash;

/**
 * Interface to implement the hash function.
 * @author Claude Dioudonnat
 */
interface HashInterface 
{
	/**
	 * The methoh hash a value.
	 * @param string The hash value.
     * @param string The salt.
	 * @return string The hashed value.
	 */
	public function hash($value, $salt);
}