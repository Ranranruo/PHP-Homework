<?php
GET("/api/members/{username}/exists", function($username) {
  $alreadyMember = DB::fetch("SELECT * FROM member WHERE username = ?", [$username]);
  $response = new Response();
  echo $response->body($alreadyMember != null)->json();
});

POST("/sign-up", function() {
  extract($_POST);
  $alreadyMember = DB::fetch("SELECT * FROM member WHERE username = ?", [$username]);
  echo json_encode(DB::fetchAll("SELECT * FROM Member"), JSON_UNESCAPED_UNICODE);
});