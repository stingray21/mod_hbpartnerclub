<?php

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
 
// Include the syndicate functions only once
require_once( dirname(__FILE__).'/helper.php' );
 
$text = modHbpartnerclubHelper::getText( );
require( JModuleHelper::getLayoutPath( 'mod_hbpartnerclub' ) );
?>