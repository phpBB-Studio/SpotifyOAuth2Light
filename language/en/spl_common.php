<?php
/**
 *
 * SPL - Spotify OAuth2 light. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2019, phpBB Studio, https://www.phpbbstudio.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

/**
* Some characters you may want to copy&paste: ’ » “ ” …
*/
$lang = array_merge($lang, [
	'AUTH_PROVIDER_OAUTH_SERVICE_STUDIO_SPOTIFY'	=> 'Spotify',

	'PHPBBSTUDIO_SPL_EXCEPTION_TOKEN'				=> 'Something went wrong requesting a Spotify OAuth2 access token.<br>
														Original error message:<br>
														<samp class="error">%s</samp><br><br>
														<em>Did you perhaps refresh the page after linking an account?</em>',

	'PHPBBSTUDIO_SPL_EXCEPTION_USER_INFO'			=> 'Something went wrong requesting the Spotify OAuth2 account information.<br><br>
														Original error message:<br>
														<samp class="error">%s</samp>',

	// Translators please do not change the following line, no need to translate it!
	'PHPBBSTUDIO_SPL_CREDIT_LINE'					=> '<a href="https://phpbbstudio.com" target="_blank">Spotify OAuth2 light</a> &copy; 2019 - phpBB Studio',
]);
