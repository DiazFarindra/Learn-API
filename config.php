<?php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';
//Make object of Google API Client for call Google API
$google_client = new Google_Client();
//Set the OAuth 2.0 Client ID
$google_client->setClientId('885505986509-c3usl06o8l6g7vkip8ksc83dsofrk2pm.apps.googleusercontent.com');
//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('Dzq5Xd3olizoZkKjk_SJCWQ1');
//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/tutorial/php-login-using-google-demo/index.php');

$google_client->addScope('email');
$google_client->addScope('profile');

session_start();
