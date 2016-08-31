<?php

use NoahBuscher\Macaw\Macaw;

Macaw::get('/', function() {
  echo 'Hello world!';
});

Macaw::get('/test?id=(:any)', function($slug) {
  echo 'The slug is: ' . $slug;
});

Macaw::post('/', function() {
  echo 'I <3 POST commands!';
});

Macaw::error(function() {
  echo '404 :: Not Found';
});

Macaw::get('/test', 'TestController@home');

Macaw::dispatch();

?>
