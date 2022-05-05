<?php

define('SSO_HTTP_SERVER', '');
define('SSO_HTTPS_SERVER', '');
define('SSO_USE_HTTPS', true);
define('SSO_ROOT_PATH', '/htdocs/app/system');
define('SSO_ROOT_URL', '/system');
define('SSO_LOGIN_URL', 'https://app.domain.com/system/');
define('SSO_ENDPOINT_URL', 'https://app.domain.com/system/endpoint.php');
define('SSO_SUPPORT_PATH', 'support');
define('SSO_PROVIDER_PATH', 'providers');
define('SSO_LANG_PATH', 'lang');
define('SSO_DEFAULT_LANG', 'en_us'); //using the 'lang' querystring parameter seems to be broken
define('SSO_ADMIN_LANG', '');
define('SSO_PROXY_X_FORWARDED_FOR', '');
define('SSO_PROXY_CLIENT_IP', '');
define('SSO_BASE_RAND_SEED', '');
define('SSO_BASE_RAND_SEED2', '');
define('SSO_BASE_RAND_SEED3', '');
define('SSO_BASE_RAND_SEED4', '');
define('SSO_BASE_RAND_SEED5', '');
define('SSO_BASE_RAND_SEED6', '');
define('SSO_BASE_RAND_SEED7', '');
define('SSO_BASE_RAND_SEED8', '');
define('SSO_BASE_RAND_SEED9', '');
define('SSO_BASE_RAND_SEED10', '');
define('SSO_BASE_RAND_SEED11', '');
define('SSO_BASE_RAND_SEED12', '');
define('SSO_BASE_RAND_SEED13', '');
define('SSO_BASE_RAND_SEED14', '');
define('SSO_HEARTBEAT_LIMIT', 30);
define('SSO_STO_ENDPOINT', false);
define('SSO_STO_ADMIN', false);
define('SSO_USING_CRON', false);
define('SSO_PRIMARY_CIPHER', 'blowfish');
define('SSO_DUAL_ENCRYPT', true);
define('SSO_USE_LESS_SAFE_STORAGE', true);

define('SSO_DB_TYPE', 'mysql');
define('SSO_DB_DSN', 'host=localhost');
define('SSO_DB_USER', '');
define('SSO_DB_PASS', '');
define('SSO_DB_MASTER_DSN', '');
define('SSO_DB_MASTER_USER', '');
define('SSO_DB_MASTER_PASS', '');
define('SSO_DB_NAME', '');
define('SSO_DB_PREFIX', '');

define('SSO_SMTP_SERVER', '');
define('SSO_SMTP_PORT', 25);
define('SSO_POP3_SERVER', '');
define('SSO_POP3_PORT', 110);
define('SSO_SMTPPOP3_USER', '');
define('SSO_SMTPPOP3_PASS', '');
define('SSO_SMTP_FROM', '');

define('SSO_SITE_ADMIN_TAG', 'sso_site_admin');
define('SSO_ADMIN_TAG', 'sso_admin');
define('SSO_LOCKED_TAG', 'sso_locked');


//Legacy or non-documented:

define('SSO_MYSQL_SERVER', '');
define('SSO_MYSQL_USER', '');
define('SSO_MYSQL_PASS', '');
define('SSO_MYSQL_MASTER_SERVER', '');
define('SSO_MYSQL_MASTER_USER', '');
define('SSO_MYSQL_MASTER_PASS', '');

define('CRYPT_BLOWFISH_MODE_CBC', '');
define('CRYPT_AES_MODE_ECB', '');
define('CRYPT_AES_MODE_CBC', '');
