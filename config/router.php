<?php

use NoahBuscher\Macaw\Macaw;

Macaw::get('/', function() {
  echo 'Hello world!';
});

Macaw::post('/', function() {
  echo 'I <3 POST commands!';
});

Macaw::error(function() {
  echo '404 :: Not Found';
});

Macaw::get('/test', 'TestController@index');

Macaw::dispatch();
