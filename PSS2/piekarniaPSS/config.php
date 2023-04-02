<?php
$conf->debug = true; # set true during development and use in your code (for instance check if true to send additional message)

$conf->server_name = 'localhost';   # server address and port
$conf->protocol = 'http';           # http or https
$conf->app_root = '/piekarniaPSS/public';   # project subfolder in domain (relative to main domain)

$conf->db_type = 'mysql';
$conf->db_server = 'localhost';
$conf->db_name = 'piekarniadb';
$conf->db_user = 'root';
$conf->db_pass = '';
$conf->db_charset = 'utf8';
$conf->db_port = '3306';
$conf->db_option = [ PDO::ATTR_CASE => PDO::CASE_NATURAL, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];