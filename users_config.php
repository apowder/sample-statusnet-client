<?php
/* including local app config */
require_once(dirname(__FILE__).'/config.php');

/**
 * You must fill it in with some random string
 * this protects some of your user's data when sent over the network
 * and must be different from other sites
 */
UserConfig::$SESSION_SECRET = $randomness;

/**
 * Database connectivity 
 */
UserConfig::$mysql_db = $mysql_db;
UserConfig::$mysql_user = $mysql_user;
UserConfig::$mysql_password = $mysql_password;
#UserConfig::$mysql_host = 'localhost';
#UserConfig::$mysql_port = '...port...';

/**
 * Status.Net Authentication configuration
 * Register your app with your Status.Net installation
 * And then uncomment two lines below and copy API Key, App Secret
 * as well as provider name and root URL for the site and API
 */

UserConfig::loadModule('statusnet');

new StatusNetAuthenticationModule(
	$statusnet_OAuth_consumer_key,
	$statusnet_OAuth_consumer_secret,
	isset($statusnet_provider) ? $statusnet_provider : 'Identi.ca',
	$statusnet_rootURL,
	$statusnet_APIRootURL
);

/**
 * User IDs of admins for this instance (to be able to access dashboard at /users/admin/)
 */
UserConfig::$admins = array(  ); // usually first user has ID of 1

/**
 * Set these to point at your header and footer or leave them commented out to use default ones
 */
UserConfig::$header = dirname(__FILE__).'/header.php';
UserConfig::$footer = dirname(__FILE__).'/footer.php';

UserConfig::$useAccounts = false;
