<?php
include_once 'private/config.php';
$database_conn = new mysqli(ServerConfig::$database_ip, ServerConfig::$database_username, ServerConfig::$database_password, ServerConfig::$database_name);
