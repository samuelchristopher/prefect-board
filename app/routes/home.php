<?php

use PrefectBoard\Models\User;

$app->get('/', function() use ($app) {
  $user = new User;

  $app->render('home.php');
});
