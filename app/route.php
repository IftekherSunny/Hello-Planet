<?php

global $app;

/**
 * Hello world route
 */

$app->group(['namespace' => 'Sun\Controllers'], function () use ($app) {

    $app->get('/hello', 'HelloController@index');

});