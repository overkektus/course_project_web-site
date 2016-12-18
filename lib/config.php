<?php
	mb_internal_encoding("UTF-8");
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	
	$message = false;
	define("SECRET", "ds9gdsags");
	define("ADM_LOGIN", "admin");
	define("ADM_PASSWORD", "0e03cedc1a9582ba71e3da3cb003d6ae");
	
	define("DB_HOST", "localhost");
	define("DB_USER", "root");
	define("DB_PASSWORD", "");
	define("DB_NAME", "landing-order");
	
	define("SMS_USER", "");
	define("SMS_PASSWORD", md5(""));
	define("SMS_PHONE", "");
	
	define("DIRECT_TOKEN", "");
	
	define("FORMAT_DATE", "Y.m.d H:i:s");
?>
