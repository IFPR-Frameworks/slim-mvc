<?php

namespace App\Routes;

use Slim\App;
use App\Controllers\StudentsController;

$settings = [
    'settings' => ['displayErrorDetails' => true]
];

$app = new App($settings);

$app->get('/', StudentsController::class . ":getAll");

$app->run();
