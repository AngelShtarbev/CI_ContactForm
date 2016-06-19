<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/* Email configuration settings
*
*/
$config['protocol'] = 'smtp';
$config['smtp_host'] = 'ssl://smtp.gmail.com';
$config['smtp_port'] = '465';
$config['smtp_user'] = 'your email address';
$config['smtp_pass'] = 'your email address's password';
$config['mailtype'] = 'html';
$config['charset'] = 'iso-8859-1';
$config['wordwrap'] = TRUE;
$config['newline'] = "\r\n";