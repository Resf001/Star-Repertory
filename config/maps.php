<?php
$router->map('GET|POST', '/', 'home', 'home');
$router->map('GET|POST', '/elements', 'elements', 'elements');
$router->map('GET|POST', '/sign-in', 'sign', 'sign');
$router->map('GET|POST', '/log-in', 'login', 'log');
$router->map('GET|POST', '/create-star', 'createStar', 'createStar');

/**
 * Ex use road : $router->generate("home")
 */