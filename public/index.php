<?php
require "../vendor/autoload.php";
$router = new AltoRouter();
require "../config/maps.php";

$match = $router->match();
dump($match);

if(is_array($match)){
    if (is_callable($match['target'])){
        call_user_func_array($match['target'], $match['params']);
    } else {
        ob_start();
        require "../template/{$match['target']}.php";
        $pageContent = ob_get_clean();
    }
    require "../elements/layount.php";
}