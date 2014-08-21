<?php
/**
 * Part of the Joomla Framework Crypt Package
 *
 * @copyright  Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla\Crypt\Cipher;

/**
 * Cipher class for Blowfish encryption, decryption and key generation.
 *
 * @since  1.0
 */
class CipherBlowfish extends CipherMcrypt
{
	/**
	 * @var    integer  The mcrypt cipher constant.
	 * @see    http://www.php.net/manual/en/mcrypt.ciphers.php
	 * @since  1.0
	 */
	protected $type = MCRYPT_BLOWFISH;

	/**
	 * @var    integer  The mcrypt block cipher mode.
	 * @see    http://www.php.net/manual/en/mcrypt.constants.php
	 * @since  1.0
	 */
	protected $mode = MCRYPT_MODE_CBC;

	/**
	 * @var    string  The Crypt key type for validation.
	 * @since  1.0
	 */
	protected $keyType = 'blowfish';
}
