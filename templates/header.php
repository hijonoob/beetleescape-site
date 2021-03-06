<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beetle Escape</title>
      
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
<!-- TODO - alterar esse link capturando o servidor -->


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>

  </head>
  <body>
  	<div id="wrap">
    <?php
      include 'templates/menu.php';
      if(isset($_SESSION['permissao'])) {
          $permissao = $_SESSION['permissao'];
          if($permissao > 2) {
            include 'templates/menuadmin.php';
          }
          if ($permissao > 1) {
            include 'templates/menugestao.php';
          }
      }
    ?>
      <div class="container" id="aconteudo">
