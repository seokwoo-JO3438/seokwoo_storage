
<!DOCTYPE html>
<html ng-app="form-demo-app">
	<head>
    <?php
    include "./db.php";

    ?>
		<meta charset="UTF-8">
		<title>SCON - 회원가입</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/register.css">
		<style>
			.container{
				margin-top: 20px;
			}
			input.ng-invalid {
				border: 5px solid red;
			}
		</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SCON - Sports Contest</title>
    <link rel="stylesheet" href="./css/page1.css">
    <link rel="stylesheet" href="./css/jquery-ui.css">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/room.css">
    <!-- Custom styles for this template -->
    <link href="css/agency.css" rel="stylesheet">
    <style>
    body{
      background-color:#f2f3f5;
    }
    </style>
		<!-- get 통해서 방 index받고 해당 index의 행 값 출력, table 설정,각 content마다 어디로 이동할 것인가 -->
	</head>
	<body id="page-top">
    <nav style="background:#212529; height:80px;"class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">SCON</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger seokfont" href="index.php">Return to Page</a>
            </li>
            <?php
            if(!isset($_SESSION['email'])){ ?>
            <li class="nav-item">
              <a class="nav-link seokfont" href="login.php">Login</a>
            </li>
            <?php
          }else{
            ?>
            <li class="nav-item">
              <a class="nav-link seokfont" href="./member/logout.php">Logout</a>
            </li>
            <?php
          }
          ?>
          </ul>
        </div>
      </div>
    </nav>
			<div class="container" id="wrap" style="margin-top:13%;">
				<div class="row">
					<div class="col-md-6 col-md-offset-3" style="background-color:#FFFFFF; border:solid 2px #FFFFFF; padding: 0 30px 75px 30px;">
							<?php
							$email = $_GET['email'];
							$idx = $_GET['idx'];
							$sql = "select * from sparring_room where idx = $idx";
							$result = mysqli_query($db, $sql);
							$row = mysqli_fetch_array($result);
							?>

							<legend style="margin-top:10%; font-size:25px;"><strong><?php echo $row['title'] ?></strong></legend>
	<!--form 태그 signUpForm -->
							<div class="lala">위치:<?php echo $row['location'] ?>,  경기장:<?php echo $row['stadium'] ?></div><div class="lala"> 날짜:<?php echo $row['date'] ?>,     모집 인원수:<?php echo $row['people'] ?></div>
							<br><br>
							<div class="lala">
							내용
							</div>
							<?php echo $row['content'] ?>
							<br>
							<button style="margin-top:5%;background-color:#fed136; border-color:#fed136;"class="btn btn-lg btn-primary btn-block signup-btn" type="submit"><strong>참여하기</strong></button>

						<div>

						</div>
					</div>
				</div>
			</div>
	</body>
</html>
