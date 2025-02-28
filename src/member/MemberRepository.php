<?php 
  class MemberRepository {
    function existsByUsername($username) {
      return DB::fetch(
        "SELECT
          COUNT(*) > 0
        FROM
          Member
        WHERE username = ?"
      ,[$username]);
    }
  }

?>