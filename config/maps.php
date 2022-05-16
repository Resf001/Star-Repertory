<?php
$router->map('GET', '/', 'home', 'home');
$router->map('GET', '/elements', 'elements', 'elements');
$router->map('GET|POST', '/sign-in', 'sign', 'sign');


/**
 * Ex use road : $router->generate("home")
 */