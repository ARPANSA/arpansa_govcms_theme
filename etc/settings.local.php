<?php

$databases = array(
  'default' => array(
    'default' => array(
      'database' => '<db_name>',
      'username' => '<db_user>',
      'password' => '<db_pass>',
      'host' => '<db_host>',
      'port' => '<db_port>',
      'driver' => 'mysql',
      'prefix' => '<db_prefix>',
    ),
  ),
);

/* Add this if you are running on your local. If you're not running production
   on Acquia, remove the settings of these conf vars from the settings.php file in
   this folder */
unset($conf['cache_backends']);
unset($conf['cache_default_class']);
unset($conf['cache_class_cache_form']);

$conf['cache'] = FALSE;
$conf['cache_lifetime'] = 0;
$conf['page_compression'] = FALSE;
$conf['theme_debug'] = TRUE;
$conf['preprocess_css'] = FALSE;
$conf['preprocess_js'] = FALSE;
$conf['advagg_enabled'] = FALSE;
$conf['securepages_enable'] = FALSE;

$conf['googleanalytics_account'] = 'UA-96320824-1';

$conf['stage_file_proxy_origin'] = 'http://arpansavm9ajsxwbj.devcloud.acquia-sites.com/';
$conf['file_private_path'] = 'sites/default/files';
$conf['file_temporary_path'] = '/tmp';

// Configure Views UI.
$conf['views_ui_show_advanced_column'] = TRUE;
$conf['views_ui_show_performance_statistics'] = TRUE;
$conf['views_ui_show_sql_query'] = TRUE;
$conf['views_ui_show_sql_query_where'] = 'above';

// Disable shield.
$conf['shield_enabled'] = FALSE;
$conf['shield_pass'] = '';
$conf['shield_user'] = '';

// Show all errors.
$conf['error_level'] = ERROR_REPORTING_DISPLAY_ALL;
ini_set('display_errors', 1);
ini_set('memory_limit', -1);
ini_set('max_execution_time', -1);
error_reporting(E_ALL);
