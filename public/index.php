<?php
require "../vendor/autoload.php";
$router = new AltoRouter();
require "../config/maps.php";
require "../elements/PDO.php";

$match = $router->match();

if(is_array($match)){
    if (is_callable($match['target'])){
        call_user_func_array($match['target'], $match['params']);
    }
    else {
        require "../template/{$match['target']}.php";
        $pageContent = ob_get_clean();
    }
    require "../elements/layount.php";
}
?>
