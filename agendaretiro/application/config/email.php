<?php defined('BASEPATH') or exit('No direct script access allowed');

// Add custom values by settings them to the $config array.
// Example: $config['smtp_host'] = 'smtp.gmail.com';
// @link https://codeigniter.com/user_guide/libraries/email.html

$config['useragent'] = '';
$config['protocol'] = 'smtp'; // or 'smtp'
$config['smtp_host'] = '';
$config['smtp_user'] = ''; 
$config['smtp_pass'] = '';
$config['smtp_auth'] = 'true';
$config['mailtype'] = 'html';
$config['smtp_crypto'] = 'ssl'; // or 'tls'
$config['smtp_port'] = 465;