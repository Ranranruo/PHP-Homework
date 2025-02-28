<?php
$requireFileFilter = [
    "src/lib/*.php", // libs
    "src/view/component/*.php", // components
    "src/page/*.php", // page
    "src/member/*.php" // member
];
foreach($requireFileFilter as $filter) {
    foreach(glob($filter) as $lib) {
        require_once $lib;
    };
}

Router::handleRequest();
