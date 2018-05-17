<?php

$currentDir = dirname(__FILE__);
$urlBase = 'http://localhost/intranet/tipsarecambios/';

if (!defined('_ROOT_DIR_')) {
    define('_ROOT_DIR_', realpath($currentDir.'/..'));
}
define('_URL_BASE_',$urlBase);
define('_ROOT_CONFIG_',_ROOT_DIR_.'/config/');
define('_ROOT_CSS_',_URL_BASE_.'assets/css/');
define('_ROOT_JS_',_URL_BASE_.'assets/js/');
define('_ROOT_IMG_',_URL_BASE_.'assets/img/');
define('_ROOT_THEME_',_ROOT_DIR_.'/inc/');
define('_ROOT_MODULE_',_ROOT_DIR_.'/modules/');
define('_ROOT_UTILIDADES_',_URL_BASE_.'utilidades/');
