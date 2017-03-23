<?php
	// Global definitions for web root 
	if ( ! defined( "PATH_SEPARATOR" ) ) {
		if ( strpos( $_ENV[ "OS" ], "Win" ) !== false )
			define( "PATH_SEPARATOR", ";" );
		else define( "PATH_SEPARATOR", ":" );
	} 
	$rootdir = getcwd();
	$includepath = ini_get('include_path');
	$addincludepath = $rootdir.'/bin'.PATH_SEPARATOR.$rootdir.'/includes';
	ini_set ( "include_path", $addincludepath.PATH_SEPARATOR.$includepath );
	//ini_set ( "",  );
	date_default_timezone_set('Asia/Kolkata');
	$homepage = 'index.php';
	$msg = array();
	$msgid = 0;
?>