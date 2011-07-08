<?php
######################################################
##
##  Configuration file for sample Status.Net client
##
######################################################

/**
 * Source of randomness for security
 */
$randomness = '....... put some random stuff here to seed encryption .........';

/**
 * MySQL configuration variables
 */
$mysql_db = 'sample_statusnet';
$mysql_user = 'sample_statusnet';
$mysql_password = '......';

/**
 * Status.Net server OAuth consumer key and secret
 * For identi.ca get yours here: http://identi.ca/settings/oauthapps
 */
$statusnet_OAuth_consumer_key = '..........';
$statusnet_OAuth_consumer_secret = '..........';

/**
 * Status.Net provider name to be displayed in the interface
 */
$statusnet_provider = 'Identi.ca';

/**
 * Base URL for Status.Net instance
 * Don't forget the trailing slash
*/
$statusnet_rootURL = 'http://identi.ca/';

/**
 * API Base URL for Status.Net instance
 * Don't forget the trailing slash
 */
$statusnet_APIRootURL = 'https://identi.ca/api/';
