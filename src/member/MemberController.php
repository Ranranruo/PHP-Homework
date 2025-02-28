<?php
GET("/api/members/{username}/exists", function($username) {
  // $memberRepositroy = new MemberRepository();
  // echo $memberRepositroy->existsByUsername($username);
  $alreadyMember = DB::fetch("SELECT * FROM Member WHERE username = ?", [$username]);
  $response = new Response();
  echo $response->body($alreadyMember != null)->json();
});

POST("/sign-up", function() {
  extract($_POST);
  $alreadyMember = DB::fetch("SELECT * FROM member WHERE username = ?", [$username]);
});
?>
