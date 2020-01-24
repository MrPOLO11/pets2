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
    //$view = new Template();
    //echo $view->render("views/home.html");
});

//Run f3
$f3->run();