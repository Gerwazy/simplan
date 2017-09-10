<?php 

$app->get('/', 'HomeController:home')->setName('home');
$app->get('/about', 'HomeController:about');
$app->get('/auth/signup', 'AuthController:getSignUp')->setName('auth.signup');
$app->post('/auth/signup', 'AuthController:postSignUp');

 ?>