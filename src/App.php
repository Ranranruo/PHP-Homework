<?php
include_once "src/lib/DB.php";
include_once "src/lib/Router.php";
include_once "src/lib/Auth.php";

include_once "src/page/PageController.php";

include_once "src/auth/AuthController.php";


Router::handleRequest();
