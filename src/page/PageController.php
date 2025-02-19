<?php
GET("/", function() {
  view("Main", "Basic");
});
GET("/sign-in", function() {
  view("SignIn");
});
GET("/sign-up", function() {
  view("SignUp");
});