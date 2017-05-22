<?php

require('vendor/autoload.php');

use Mpociot\BotMan\BotManFactory;
use Mpociot\BotMan\BotMan;

/*
 *  For Glip configuration
 */

$config = [
    'GLIP_SERVER' => 'https://platform.devtest.ringcentral.com',    // Server Url ( Production: https://platform.ringcentral.com || Sandbox: https://platform.devtest.ringcentral.com )
    'GLIP_APPKEY' => 'appKey',                                      // appKey
    'GLIP_APPSECRET' => 'appSecret',                                // appSecret
    'GLIP_USERNAME' => 'Username',                                  // username
    'GLIP_PASSWORD' => 'Password',                                  // password
    'GLIP_EXTENSION' => 'Extension'                                 // extension
];


// create an instance
$botman = BotManFactory::create($config);

// To Create the Subscription using Webhooks
$cacheDir = __DIR__ . DIRECTORY_SEPARATOR . '_subscribe';
if (!file_exists($cacheDir)) {
    mkdir($cacheDir);
    return $botman->verifyServices();
}


// give the bot something to listen for.
$botman->hears('hello', function (BotMan $bot) {
    $bot->reply('Hello yourself.');
});

// give the bot something to listen for.
$botman->hears('how are you doing', function (BotMan $bot) {
    $bot->reply('I am fine how are you doing today ?');
});

$botman->hears('what is my name', function (BotMan $bot) {
    $bot->reply('My name is Adam');
});

// start listening
$botman->listen();