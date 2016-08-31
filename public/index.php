<?php

use Illuminate\Database\Capsule\Manager as Capsule;

// Autoload

require '../vendor/autoload.php';

// Eloquent ORM

$capsule = new Capsule;

// use symfony yaml Component to transform the yaml setting.

$ymlName = "mysql";

$capsule->addConnection(require '../utilities/ymalTransform.php');

$capsule->bootEloquent();

// Router
require '../config/router.php';
