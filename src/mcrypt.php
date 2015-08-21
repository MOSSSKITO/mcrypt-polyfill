<?php

/**
 * @file
 * Defines symbols normally provided by ext_mcrypt.
 */

// Dear reader: never use runkit. This is just for testing. Just disable mcrypt. kthxbai.
if (!extension_loaded('mcrypt') || getenv('USE_RUNKIT')) {

    // mcrypt Constants
    defined('MCRYPT_ENCRYPT') || define('MCRYPT_ENCRYPT', '0');
    defined('MCRYPT_DECRYPT') || define('MCRYPT_DECRYPT', '1');
    defined('MCRYPT_DEV_RANDOM') || define('MCRYPT_DEV_RANDOM', '0');
    defined('MCRYPT_DEV_URANDOM') || define('MCRYPT_DEV_URANDOM', '1');
    defined('MCRYPT_RAND') || define('MCRYPT_RAND', '2');
    defined('MCRYPT_3DES') || define('MCRYPT_3DES', 'tripledes');
    defined('MCRYPT_ARCFOUR_IV') || define('MCRYPT_ARCFOUR_IV', 'arcfour-iv');
    defined('MCRYPT_ARCFOUR') || define('MCRYPT_ARCFOUR', 'arcfour');
    defined('MCRYPT_BLOWFISH') || define('MCRYPT_BLOWFISH', 'blowfish');
    defined('MCRYPT_BLOWFISH_COMPAT') || define('MCRYPT_BLOWFISH_COMPAT', 'blowfish-compat');
    defined('MCRYPT_CAST_128') || define('MCRYPT_CAST_128', 'cast-128');
    defined('MCRYPT_CAST_256') || define('MCRYPT_CAST_256', 'cast-256');
    defined('MCRYPT_CRYPT') || define('MCRYPT_CRYPT', 'crypt');
    defined('MCRYPT_DES') || define('MCRYPT_DES', 'des');
    defined('MCRYPT_ENIGNA') || define('MCRYPT_ENIGNA', 'crypt');
    defined('MCRYPT_GOST') || define('MCRYPT_GOST', 'gost');
    defined('MCRYPT_LOKI97') || define('MCRYPT_LOKI97', 'loki97');
    defined('MCRYPT_PANAMA') || define('MCRYPT_PANAMA', 'panama');
    defined('MCRYPT_RC2') || define('MCRYPT_RC2', 'rc2');
    defined('MCRYPT_RIJNDAEL_128') || define('MCRYPT_RIJNDAEL_128', 'rijndael-128');
    defined('MCRYPT_RIJNDAEL_192') || define('MCRYPT_RIJNDAEL_192', 'rijndael-192');
    defined('MCRYPT_RIJNDAEL_256') || define('MCRYPT_RIJNDAEL_256', 'rijndael-256');
    defined('MCRYPT_SAFER64') || define('MCRYPT_SAFER64', 'safer-sk64');
    defined('MCRYPT_SAFER128') || define('MCRYPT_SAFER128', 'safer-sk128');
    defined('MCRYPT_SAFERPLUS') || define('MCRYPT_SAFERPLUS', 'saferplus');
    defined('MCRYPT_SERPENT') || define('MCRYPT_SERPENT', 'serpent');
    defined('MCRYPT_THREEWAY') || define('MCRYPT_THREEWAY', 'threeway');
    defined('MCRYPT_TRIPLEDES') || define('MCRYPT_TRIPLEDES', 'tripledes');
    defined('MCRYPT_TWOFISH') || define('MCRYPT_TWOFISH', 'twofish');
    defined('MCRYPT_WAKE') || define('MCRYPT_WAKE', 'wake');
    defined('MCRYPT_XTEA') || define('MCRYPT_XTEA', 'xtea');
    defined('MCRYPT_IDEA') || define('MCRYPT_IDEA', 'idea');
    defined('MCRYPT_MARS') || define('MCRYPT_MARS', 'mars');
    defined('MCRYPT_RC6') || define('MCRYPT_RC6', 'rc6');
    defined('MCRYPT_SKIPJACK') || define('MCRYPT_SKIPJACK', 'skipjack');
    defined('MCRYPT_MODE_CBC') || define('MCRYPT_MODE_CBC', 'cbc');
    defined('MCRYPT_MODE_CFB') || define('MCRYPT_MODE_CFB', 'cfb');
    defined('MCRYPT_MODE_ECB') || define('MCRYPT_MODE_ECB', 'ecb');
    defined('MCRYPT_MODE_NOFB') || define('MCRYPT_MODE_NOFB', 'nofb');
    defined('MCRYPT_MODE_OFB') || define('MCRYPT_MODE_OFB', 'ofb');
    defined('MCRYPT_MODE_STREAM') || define('MCRYPT_MODE_STREAM', 'stream');


    /**
     * Encrypt/decrypt data in ECB mode.
     *
     * @param int $cipher
     * @param string $key
     * @param string $data
     * @param int $mode
     * @return string
     * @deprecated
     */
    function mcrypt_ecb($cipher, $key, $data, $mode)
    {
    }

    /**
     * Encrypt/decrypt data in CBC mode.
     *
     * @param int $cipher
     * @param string $key
     * @param string $data
     * @param int $mode
     * @param string $iv
     * @return string
     * @deprecated
     */
    function mcrypt_cbc($cipher, $key, $data, $mode, $iv = null)
    {
    }

    /**
     * Encrypt/decrypt data in CFB mode.
     *
     * @param int $cipher
     * @param string $key
     * @param string $data
     * @param int $mode
     * @param string $iv
     * @return string
     * @deprecated
     */
    function mcrypt_cfb($cipher, $key, $data, $mode, $iv)
    {
    }

    /**
     * Encrypt/decrypt data in OFB mode.
     *
     * @param int $cipher
     * @param string $key
     * @param string $data
     * @param int $mode
     * @param string $iv
     * @return string
     * @deprecated
     */
    function mcrypt_ofb($cipher, $key, $data, $mode, $iv)
    {
    }

    /**
     * Get the key size of the specified cipher.
     *
     * @param int $cipher
     * @return int
     * @deprecated
     */
    function mcrypt_get_key_size($cipher)
    {
    }

    /**
     * Get the block size of the specified cipher.
     *
     * @param int $cipher
     * @return int
     * @deprecated
     */
    function mcrypt_get_block_size($cipher)
    {
    }

    /**
     * Get the name of the specified cipher.
     *
     * @param int $cipher
     * @return string
     * @deprecated
     */
    function mcrypt_get_cipher_name($cipher)
    {
    }

    /**
     * Create an initialization vector (IV) from a random source.
     *
     * @param int $size
     * @param int $source
     * @return string
     * @deprecated
     */
    function mcrypt_create_iv($size, $source = MCRYPT_DEV_URANDOM)
    {
    }

    /**
     * Get an array of all supported ciphers.
     *
     * @param string $lib_dir
     * @return array
     * @deprecated
     */
    function mcrypt_list_algorithms($lib_dir = null)
    {
    }

    /**
     * Get an array of all supported modes.
     *
     * @param string $lib_dir
     * @return array
     * @deprecated
     */
    function mcrypt_list_modes($lib_dir = null)
    {
    }

    /**
     * Returns the size of the IV belonging to a specific cipher/mode combination.
     *
     * @param string $cipher
     * @param string $mode
     * @return int
     * @deprecated
     */
    function mcrypt_get_iv_size($cipher, $mode)
    {
    }

    /**
     * Encrypts plaintext with given parameters.
     *
     * @param string $cipher
     * @param string $key
     * @param string $data
     * @param string $mode
     * @param string $iv
     * @return string
     * @deprecated
     */
    function mcrypt_encrypt($cipher, $key, $data, $mode, $iv = null)
    {
    }

    /**
     * Decrypts crypttext with given parameters.
     *
     * @param string $cipher
     * @param string $key
     * @param string $data
     * @param string $mode
     * @param string $iv
     * @return string
     * @deprecated
     */
    function mcrypt_decrypt($cipher, $key, $data, $mode, $iv = null)
    {
    }

    /**
     * Opens the module of the algorithm and the mode to be used.
     *
     * @param string $algorithm
     * @param string $algorithm_directory
     * @param string $mode
     * @param string $mode_directory
     * @return resource
     * @deprecated
     */
    function mcrypt_module_open($algorithm, $algorithm_directory, $mode, $mode_directory)
    {
    }

    /**
     * This function initializes all buffers needed for encryption.
     *
     * @param resource $td
     * @param string $key
     * @param string $iv
     * @return int
     * @deprecated
     */
    function mcrypt_generic_init($td, $key, $iv)
    {
    }

    /**
     * This function encrypts data.
     *
     * @param resource $td
     * @param string $data
     * @return string
     * @deprecated
     */
    function mcrypt_generic($td, $data)
    {
    }

    /**
     * Decrypt data.
     *
     * @param resource $td
     * @param string $data
     * @return string
     * @deprecated
     */
    function mdecrypt_generic($td, $data)
    {
    }

    /**
     * This function terminates encryption.
     *
     * @param resource $td
     * @return bool
     * @deprecated
     */
    function mcrypt_generic_end($td)
    {
    }

    /**
     * This function deinitializes an encryption module.
     *
     * @param resource $td
     * @return bool
     * @deprecated
     */
    function mcrypt_generic_deinit($td)
    {
    }

    /**
     * Runs a self test on the opened module.
     *
     * @param resource $td
     * @return int
     * @deprecated
     */
    function mcrypt_enc_self_test($td)
    {
    }

    /**
     * Checks whether the encryption of the opened mode works on blocks.
     *
     * @param resource $td
     * @return bool
     * @deprecated
     */
    function mcrypt_enc_is_block_algorithm_mode($td)
    {
    }

    /**
     * Checks whether the algorithm of the opened mode is a block algorithm.
     *
     * @param resource $td
     * @return bool
     * @deprecated
     */
    function mcrypt_enc_is_block_algorithm($td)
    {
    }

    /**
     * Checks whether the opened mode outputs blocks.
     *
     * @param resource $td
     * @return bool
     * @deprecated
     */
    function mcrypt_enc_is_block_mode($td)
    {
    }

    /**
     * Returns the blocksize of the opened algorithm.
     *
     * @param resource $td
     * @return int
     * @deprecated
     */
    function mcrypt_enc_get_block_size($td)
    {
    }

    /**
     * Returns the maximum supported keysize of the opened mode.
     *
     * @param resource $td
     * @return int
     * @deprecated
     */
    function mcrypt_enc_get_key_size($td)
    {
    }

    /**
     * Returns an array with the supported keysizes of the opened algorithm.
     *
     * @param resource $td
     * @return array
     * @deprecated
     */
    function mcrypt_enc_get_supported_key_sizes($td)
    {
    }

    /**
     * Returns the size of the IV of the opened algorithm.
     *
     * @param resource $td
     * @return int
     * @deprecated
     */
    function mcrypt_enc_get_iv_size($td)
    {
    }

    /**
     * Returns the name of the opened algorithm.
     *
     * @param resource $td
     * @return string
     * @deprecated
     */
    function mcrypt_enc_get_algorithms_name($td)
    {
    }

    /**
     * Returns the name of the opened mode.
     *
     * @param resource $td
     * @return string
     * @deprecated
     */
    function mcrypt_enc_get_modes_name($td)
    {
    }

    /**
     * This function runs a self test on the specified module.
     *
     * @param string $algorithm
     * @param string $lib_dir
     * @return bool
     * @deprecated
     */
    function mcrypt_module_self_test($algorithm, $lib_dir = null)
    {
    }

    /**
     * Returns if the specified module is a block algorithm or not.
     *
     * @param string $mode
     * @param string $lib_dir
     * @return bool
     * @deprecated
     */
    function mcrypt_module_is_block_algorithm_mode($mode, $lib_dir = null)
    {
    }

    /**
     * This function checks whether the specified algorithm is a block algorithm.
     *
     * @param string $algorithm
     * @param string $lib_dir
     * @return bool
     * @deprecated
     */
    function mcrypt_module_is_block_algorithm($algorithm, $lib_dir = null)
    {
    }

    /**
     * Returns if the specified mode outputs blocks or not.
     *
     * @param string $mode
     * @param string $lib_dir
     * @return bool
     * @deprecated
     */
    function mcrypt_module_is_block_mode($mode, $lib_dir = null)
    {
    }

    /**
     * Returns the blocksize of the specified algorithm.
     *
     * @param string $algorithm
     * @param string $lib_dir
     * @return int
     * @deprecated
     */
    function mcrypt_module_get_algo_block_size($algorithm, $lib_dir = null)
    {
    }

    /**
     * Returns the maximum supported keysize of the opened mode.
     *
     * @param string $algorithm
     * @param string $lib_dir
     * @return int
     * @deprecated
     */
    function mcrypt_module_get_algo_key_size($algorithm, $lib_dir = null)
    {
    }

    /**
     * Returns an array with the supported keysizes of the opened algorithm.
     *
     * @param string $algorithm
     * @param string $lib_dir
     * @return array
     * @deprecated
     */
    function mcrypt_module_get_supported_key_sizes($algorithm, $lib_dir = null)
    {
    }

    /**
     * Close the mcrypt module.
     *
     * @param resource $td <p>
     * @return bool
     * @deprecated
     */
    function mcrypt_module_close($td)
    {
    }

}
