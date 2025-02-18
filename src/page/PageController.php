<?php
include_once "src/lib/View.php";
GET("/", function() {
  view("Main", "Basic");
});
GET("/login", function() {
  view("Login");
});