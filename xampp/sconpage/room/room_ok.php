<?php
  include "../db.php";
  $kind = $_POST['kind'];
  $location = $_POST['location'];
  $date = $_POST['Date'];
  $stadium = htmlspecialchars($_POST['stadium']);
  $content = htmlspecialchars($_POST['content']);
  $title = htmlspecialchars($_POST['title']);
  $people = $_POST['people'];
  $email = $_SESSION['email'];

   if($date == NULL && $stadium == NULL && $content == NULL && $title == NULL)
  {
    echo"<script>alert('빈칸을 채워주세요.'); history.back();</script>";
  }
  else if($date == NULL)
  {
    echo"<script>alert('날짜를 선택해주세요.'); history.back();</script>";
  }
  else if($stadium == NULL)
  {
    echo"<script>alert('경기장을 입력해주세요.'); history.back();</script>";
  }
  else if($content == NULL)
  {
    echo"<script>alert('내용을 입력해주세요.'); history.back();</script>";
  }
  else if($title == NULL)
  {
    echo"<script>alert('방제목을 입력해주세요.'); history.back();</script>";
  }

  else{
  if($kind == 'tennis')
  {
  $sql = mq("insert into tennis_room (kind,email,location,date,stadium,content,title,people) values('".$kind."','".$email."','".$location."','".$date."','".$stadium."','".$content."','".$title."','".$people."')");
  echo "<script>alert('방을 생성하였습니다.');history.back();</script>";
  }
  else if($kind == 'badminton')
  {
  $sql = mq("insert into badminton_room (kind,email,location,date,stadium,content,title,people) values('".$kind."','".$email."','".$location."','".$date."','".$stadium."','".$content."','".$title."','".$people."')");
  echo "<script>alert('방을 생성하였습니다.');history.back();</script>";
  }
  else if($kind == 'sparring')
  {
  $sql = mq("insert into sparring_room (kind,email,location,date,stadium,content,title,people) values('".$kind."','".$email."','".$location."','".$date."','".$stadium."','".$content."','".$title."','".$people."')");
  echo "<script>alert('방을 생성하였습니다.');history.back();</script>";
  }
  }

 ?>
<meta charset="utf-8" />
