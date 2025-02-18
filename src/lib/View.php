<?php
function view($pageName, $layout = "", $model = "")
{
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/style/Global.css">
    <link rel="stylesheet" href="public/style/<?= $pageName ?>.css">
    <title>homework</title>
  </head>

  <body>
    <div id="app">

      <?php
      $layout == "" ? null : require_once "src/view/template/$layout" . "Sidebar.php";
      ?>
      <?php
      require_once "src/view/$pageName.php";
      ?>
    </div>
  </body>

  </html>
  <?php
}
?>