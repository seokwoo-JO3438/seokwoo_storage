<?php
  include "../db.php";
  if($_POST["name"]=="" || $_POST["phone_number"] ==""){
    echo '<script> alert("항목을 입력하세요."); history.back();</script>';
  }else{
    $username = $_POST['name'];
    $phone = $_POST['phone_number'];

    $sql = mq("select * from host_info where name='{$username}'&& phone_number='{$phone}'");
    $result = $sql -> fetch_array();

    if($result["name"]==$username){
      echo"<script>alert('회원님의 Email주소는 ".$result['email']."입니다.'); document.location.href='../login.php'; </script>";
    }else{
      echo"<script>alert('없는 계정입니다.'); history.back();</script>";
    }
  }
 ?>
