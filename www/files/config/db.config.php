<?php if(!defined("__XE__")) exit();
$db_info = (object)array (
  'master_db' => 
  array (
    'db_type' => 'mysqli',
    'db_port' => '3306',
    'db_hostname' => 'localhost',
    'db_userid' => 'ceh4613',
    'db_password' => 'dusflwl2018!',
    'db_database' => 'ceh4613',
    'db_table_prefix' => 'yeonriji_',
  ),
  'slave_db' => 
  array (
    0 => 
    array (
      'db_type' => 'mysqli',
      'db_port' => '3306',
      'db_hostname' => 'localhost',
      'db_userid' => 'ceh4613',
      'db_password' => 'dusflwl2018!',
      'db_database' => 'ceh4613',
      'db_table_prefix' => 'yeonriji_',
    ),
  ),
  'default_url' => 'http://yeonriji.kr/',
  'use_mobile_view' => 'N',
  'use_rewrite' => 'N',
  'time_zone' => '+0900',
  'use_prepared_statements' => 'Y',
  'qmail_compatibility' => 'N',
  'use_db_session' => 'N',
  'use_ssl' => 'none',
  'sitelock_whitelist' => 
  array (
    0 => 'localhost',
  ),
  'use_sso' => 'N',
  'use_html5' => 'N',
  'admin_ip_list' => NULL,
);