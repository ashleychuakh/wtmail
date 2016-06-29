<?php

Route::auth();

Route::get("/", [
	"as" => "index", 
	"uses" => "MainController@index"
]);

/*
|--------------------------------------------------------------------------
| Account Route
|--------------------------------------------------------------------------
*/

Route::get("/login", [
  "as"   => "login",
  "uses" => "MainController@getAccountLogin"
]);

Route::post("/login", [
  "as"   => "login",
  "uses" => "MainController@postAccountLogin"
]);

Route::get("/home", [
  "as" => "home", 
  "uses" => "MainController@home"
]);

Route::get("/register", [
  "as"   => "register",
  "uses" => "MainController@getAccountRegister"
]);

Route::post("/register", [
  "as"   => "register",
  "uses" => "MainController@postAccountRegister"
]);

Route::get("/logout", [
  "as"   => "logout",
  "uses" => "MainController@logout"
]);

Route::get("/createAccount", [
  "as"   => "createAccount",
  "uses" => "MainController@getCreateAccount"
]);

Route::post("/createAccount", [
  "as"   => "createAccount",
  "uses" => "MainController@postCreateAccount"
]);

Route::get("/readAccount", [
  "as"   => "readAccount",
  "uses" => "MainController@getReadAccount"
]);

Route::get("/updateAccount/{account}", [
  "as"   => "updateAccount",
  "uses" => "MainController@getUpdateAccount"
]);

Route::post("/updateAccount/{account}", [
  "as"   => "updateAccount",
  "uses" => "MainController@postUpdateAccount"
]);

Route::get("/removeAccount/{account}", [
  "as"   => "removeAccount",
  "uses" => "MainController@getRemoveAccount"
]);


/*
|--------------------------------------------------------------------------
| Client Route
|--------------------------------------------------------------------------
*/

Route::get("/createClient", [
  "as"   => "createClient",
  "uses" => "MainController@getCreateClient"
]);

Route::post("/createClient", [
  "as"   => "createClient",
  "uses" => "MainController@postCreateClient"
]);

Route::get("/readClient", [
  "as"   => "readClient",
  "uses" => "MainController@getReadClient"
]);

Route::get("/updateClient/{client}", [
  "as"   => "updateClient",
  "uses" => "MainController@getUpdateClient"
]);

Route::post("/updateClient/{client}", [
  "as"   => "updateClient",
  "uses" => "MainController@postUpdateClient"
]);

Route::get("/removeClient/{client}", [
  "as"   => "removeClient",
  "uses" => "MainController@getRemoveClient"
]);


/*
|--------------------------------------------------------------------------
| Lead Route
|--------------------------------------------------------------------------
*/

Route::get("/createLead", [
  "as"   => "createLead",
  "uses" => "MainController@getCreateLead"
]);

Route::post("/createLead", [
  "as"   => "createLead",
  "uses" => "MainController@postCreateLead"
]);

Route::get("/readLead", [
  "as"   => "readLead",
  "uses" => "MainController@getReadLead"
]);

Route::get("/updateLead/{lead}", [
  "as"   => "updateLead",
  "uses" => "MainController@getUpdateLead"
]);

Route::post("/updateLead/{lead}", [
  "as"   => "updateLead",
  "uses" => "MainController@postUpdateLead"
]);

Route::get("/removeLead/{lead}", [
  "as"   => "removeLead",
  "uses" => "MainController@getRemoveLead"
]);


/*
|--------------------------------------------------------------------------
| Mail Provider Route
|--------------------------------------------------------------------------
*/

Route::get("/createMailProvider", [
  "as"   => "createMailProvider",
  "uses" => "MainController@getCreateMailProvider"
]);

Route::post("/createMailProvider", [
  "as"   => "createMailProvider",
  "uses" => "MainController@postCreateMailProvider"
]);

Route::get("/readMailProvider", [
  "as"   => "readMailProvider",
  "uses" => "MainController@getReadMailProvider"
]);

Route::get("/updateMailProvider/{mailProvider}", [
  "as"   => "updateMailProvider",
  "uses" => "MainController@getUpdateMailProvider"
]);

Route::post("/updateMailProvider/{mailProvider}", [
  "as"   => "updateMailProvider",
  "uses" => "MainController@postUpdateMailProvider"
]);

Route::get("/removeMailProvider/{mailProvider}", [
  "as"   => "removeMailProvider",
  "uses" => "MainController@getRemoveMailProvider"
]);


/*
|--------------------------------------------------------------------------
| Tracking Data Route
|--------------------------------------------------------------------------
*/

Route::get("/createTrackingData", [
  "as"   => "createTrackingData",
  "uses" => "MainController@getCreateTrackingData"
]);

Route::post("/createTrackingData", [
  "as"   => "createTrackingData",
  "uses" => "MainController@postCreateTrackingData"
]);

Route::get("/readTrackingData", [
  "as"   => "readTrackingData",
  "uses" => "MainController@getReadTrackingData"
]);

Route::get("/updateTrackingData/{trackingdata}", [
  "as"   => "updateTrackingData",
  "uses" => "MainController@getUpdateTrackingData"
]);

Route::post("/updateTrackingData/{trackingdata}", [
  "as"   => "updateTrackingData",
  "uses" => "MainController@postUpdateTrackingData"
]);

Route::get("/removeTrackingData/{trackingdata}", [
  "as"   => "removeTrackingData",
  "uses" => "MainController@getRemoveTrackingData"
]);

