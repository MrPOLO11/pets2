<?php
// Turn on error reporting -- this is critical!
ini_set('display_errors',1);
error_reporting(E_ALL);

//Require autoload file
require("vendor/autoload.php");

//Instantiate F3
$f3 = Base::Instance();

//Define a default route
$f3->route("GET /", function (){
    echo "<h1>My Pets</h1>";
    echo "<a href='order'>Order a Pet</a>";
});

$f3->route("GET /@animal", function($f3, $params) {
    $animal = $params['animal'];
    switch ($animal) {
        case 'chicken':
            echo "Cluck!";
            break;
        case 'dog':
            echo "Woof!";
            break;
        case 'cat':
            echo "Meow!";
            break;
        case 'horse':
            echo "Nay!";
            break;
        case 'cow':
            echo "Moo!";
            break;
        default:
            $f3->error(404);
    }
});

//Run f3
$f3->run();