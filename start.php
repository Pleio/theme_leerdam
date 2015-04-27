<?php

define("THEME_GRAPHICS", elgg_get_site_url() . "mod/theme_leerdam/_graphics/");
define("THEME_COLOR_1", "70bfb0"); // green
define("THEME_COLOR_2", "ffd500"); // yellow
define("THEME_COLOR_3", "f04e30"); // red
define("THEME_COLOR_4", "afb1ad"); // green
define("THEME_COLOR_5", "39a8d9"); // blue
define("THEME_COLOR_6", "2c2c2d"); // dark grey (text)
define("THEME_COLOR_7", "e5e5e5"); // light grey (background)

define("GLZ_SITE_GUID", 5118402);

require_once(dirname(__FILE__) . "/lib/hooks.php");

function theme_leerdam_init() {

	require_once(elgg_get_plugins_path() . "widget_manager/widgets/rss/vendors/simplepie/autoloader.php");

	elgg_register_widget_type("glz_news", elgg_echo("theme_leerdam:widgets:glz_news:title"), elgg_echo("theme_leerdam:widgets:glz_news:description"), "index", true);
	elgg_extend_view("css/elgg", "css/theme_leerdam");
	
	elgg_unextend_view("page/elements/header", "search/header");
	
	// plugin hooks
	elgg_register_plugin_hook_handler("access:collections:read", "user", "theme_leerdam_access_read_hook");
}

elgg_register_event_handler('init', 'system', 'theme_leerdam_init');