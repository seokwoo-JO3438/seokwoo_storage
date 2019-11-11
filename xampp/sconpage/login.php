<?php
 include "./db.php"
 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>SCON-Login</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="css/agency.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

    </style>
    <link href="signin.css" rel="stylesheet">
    <link href="./css/login2.css" rel="stylesheet">
  </head>
  <body id="page-top"class="text-center" style="background-color:#f2f3f5;">
    <nav style="background-color:#1f1e1e; height:50px;"class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">SCON</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link " href="index.php">Introduce</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="index.php">Make a room</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="index.php">Enter a room</a>
            </li>
            <?php
            if(!isset($_SESSION['email'])){ ?>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <?php
          }else{
            ?>
            <li class="nav-item">
              <a class="nav-link" href="./member/logout.php">Logout</a>
            </li>
            <?php
          }
          ?>
          </ul>
        </div>
      </div>
    </nav>

    <form class="form-signin" method="POST" style="background-color:#FFFFFF; border:solid 2px #FFFFFF;" action="./member/login_ok.php">
      <img class="mb-4" src="./css/loginlogo.jpg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">SCON</h1>
      <label for="inputmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" name="email"class="form-control" placeholder="이메일 주소" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control" style="margin-top: 2%;"placeholder="비밀번호" required>
      <div style="margin-top:4%"class="checkbox mb-3">

        <table class="cfont" align="center"height="50"class="afont">
          <tr>
            <td><a style="text-decoration:none; color:#000000;"href="search.php">이메일 찾기 | </a></td>
            <td><a style="text-decoration:none; color:#000000;"href="search.php">비밀번호 변경 | </a></td>
            <td><a style="text-decoration:none; color:#000000;"href="register.php">회원가입</a></td>
          </tr>
        </table>

      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit"><strong>로그인</strong></button>

      <p class="mt-5 mb-3 text-muted">SCON - Sports Contests</p>
    </form>
  </body>
</html>
