<?php

POST("/sign-up", function() {
  extract($_POST);
  $result = DB::fetch("SELECT * FROM member");
  print_r($result);
});