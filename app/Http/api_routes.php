<?php

/*
* API Routes
*/

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
  $api->post('mail/send', 'MailController@postMailSend');
  $api->post('account/login', 'AccountController@postAccountLogin');
});

//API Routes need to be unique.
// For example, If you have account/{account}
// You cannot have account/all
// As it will assume that all is the model number that you are trying to bind.
// Also, if the record does not exist, It will return 404 and not 401.