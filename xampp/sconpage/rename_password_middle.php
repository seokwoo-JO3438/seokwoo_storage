<?php
include "./db.php";
if($_POST["email"]=="" || $_POST["phone_number"] ==""){
  echo '<script> alert("항목을 입력하세요."); history.back();</script>';
}else{
  $usermail = $_POST['email'];
  $phone = $_POST['phone_number'];
  $sql = mq("select * from host_info where email='{$usermail}'&& phone_number='{$phone}'");
  $result = $sql -> fetch_array();
  $compare_pn = $result['phone_number'];
  if($phone != $compare_pn){
    echo"<script>alert('이메일과 비밀번호가 일치하지 않습니다.'); history.back();</script>";
  }
  else{
    echo "<script>alert('비밀번호 변경 페이지로 이동합니다.'); document.location.href='./rename_password.php';</script>";
    $_SESSION['umail']=$usermail;
  }
}
  ?>
