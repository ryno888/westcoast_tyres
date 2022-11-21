<?php

/**
 * Setup file
 */

//general

defined('CI_BASE_URL')          OR define('CI_BASE_URL', "http://westcoast_tyres.local/");
defined('CI_NAME')              OR define('CI_NAME', "West Coast Tyres"); 
defined('CI_SYSTEM_NAME')       OR define('CI_SYSTEM_NAME', "Admin System"); 
defined('CI_ENCRYPT_KEY')       OR define('CI_ENCRYPT_KEY', "locWestcoastTyresKey"); 
defined('CI_CONTACT_NUMBER')    OR define('CI_CONTACT_NUMBER', ""); 

//site db
defined('DB_DATABASE')          OR define('DB_DATABASE', "loc_westcoast_tyres"); 
defined('DB_HOST_NAME')         OR define('DB_HOST_NAME', "localhost"); 
defined('DB_USERNAME')          OR define('DB_USERNAME', "root"); 
defined('DB_PASSWORD')          OR define('DB_PASSWORD', "root"); 
defined('DB_PORT')              OR define('DB_PORT', "3306"); 

//email
defined('EMAIL_PROTOCOL')       OR define('EMAIL_PROTOCOL', "smtp"); 
defined('EMAIL_HOST')           OR define('EMAIL_HOST', "mail.s-system.co.za"); 
defined('EMAIL_PORT')           OR define('EMAIL_PORT', "587"); 
defined('EMAIL_USERNAME')       OR define('EMAIL_USERNAME', "admin@s-system.co.za"); 
defined('EMAIL_PASSWORD')       OR define('EMAIL_PASSWORD', "dDkf36pWMe9Bza4uu"); 
defined('EMAIL_FROM')           OR define('EMAIL_FROM', "admin@s-system.co.za"); 
defined('EMAIL_DEV')            OR define('EMAIL_DEV', "ryno888@gmail.com"); 

//formatting
defined('CI_DATETIME')          OR define('CI_DATETIME', "Y-m-d H:i:s");
defined('CI_DATE')              OR define('CI_DATE', "Y-m-d");
defined('CI_DATE')              OR define('CI_TIME', "H:i:s");
defined('CI_SHOW_ERRORS')       OR define('CI_SHOW_ERRORS', true);

//facebook api
if (!defined('CR_FACEBOOK_ID'))         { define('CR_FACEBOOK_ID', ""); }
if (!defined('CR_FACEBOOK_SECRET'))     { define('CR_FACEBOOK_SECRET', ""); }

//tinypng api
if (!defined('CR_TINYPNG_KEY'))         { define('CR_TINYPNG_KEY', ""); }

//meta
defined('CI_META_TITLE')        OR define('CI_META_TITLE', CI_NAME." | Website");
defined('CI_META_DESCRIPTION')  OR define('CI_META_DESCRIPTION', "Westcoast Tyres");
defined('CI_META_KEYWORDS')     OR define('CI_META_KEYWORDS', "System, Westcoast Tyres, Westcoast, Tyres");
defined('CI_META_AUTHOR')       OR define('CI_META_AUTHOR', "Ryno van Zyl");
defined('CI_META_ROBOTS')       OR define('CI_META_ROBOTS', "no-cache");
defined('CI_META_VIEWPORT')     OR define('CI_META_VIEWPORT', "width=device-width, initial-scale=1.0");
