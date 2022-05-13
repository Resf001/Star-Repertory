<?php
$router->map('GET', '/', 'home', 'home');
$router->map('GET', '/elements', 'elements', 'elements');


/**
 * Ex use road : $router->generate("home")
 */