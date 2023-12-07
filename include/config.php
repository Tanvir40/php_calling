<?php

$config = new stdClass();

$config->app_name='Grupo Chat';
$config->app_version='3.5';

$config->site_url="https://tanvir.siliconsoftit.com/projects/video/";
$config->force_url=false;
$config->force_https=false;
$config->developer_mode = false;
$config->csrf_token=false;

$config->samesite_cookies='default';
$config->http_only_cookies=false;
$config->cookie_domain="";
$config->timezone='Asia/Kolkata';
$config->file_seperator='-gr-';
$db_error_mode=PDO::ERRMODE_SILENT;

if ($config->developer_mode) {
    $db_error_mode=PDO::ERRMODE_EXCEPTION;
}

$config->database=[
    'type' => 'mysql',
    'host' => 'localhost',
    'database' => 'silicons_video',
    'username' => 'silicons_video',
    'password' => 'silicons_video',
    'port' => '3306',
    'prefix' => 'gr_',
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_general_ci',
    'logging' => false,
    'error' => $db_error_mode,
];