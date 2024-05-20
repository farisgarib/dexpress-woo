<?php
/**
* Plugin Name: Fun Plugin
* Plugin URI: 
* Description: This is a Fun Plugin.
* Version: 2.0
* Author: Sajid Javed
* Author URI: https://sajidjaved.com/
**/

require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'',
	__FILE__,
	'FunPlugin'
);

//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('main');

//Optional: If you're using a private repository, specify the access token like this:
$myUpdateChecker->setAuthentication('');
