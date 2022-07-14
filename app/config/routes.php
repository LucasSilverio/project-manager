<?php

$router->add('GET','/', function () {
    return 'Homepage';
});

$router->add('GET','/users/(\d+)', '\App\Controllers\UsersController::show');


