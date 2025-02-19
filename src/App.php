<?php
$requireFileFilter = [
    "src/lib/*.php", // libs
    "src/*/*Controller.php", // controllers
    "src/view/component/*.php" // components
];
foreach($requireFileFilter as $filter) {
    foreach(glob($filter) as $lib) {
        require_once $lib;
    };
}

Router::handleRequest();
