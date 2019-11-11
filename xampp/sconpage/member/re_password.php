<?php
  include "../db.php";
  include "../password.php";

  if($_POST['password3'] != $_POST['password4'])
  {
    echo "<script>alert('비밀번호와 비밀번호 확인이 서로 다릅니다.'); history.back();</script>";
  }
  else{
  $userpw = password_hash($_POST['password3'], PASSWORD_DEFAULT);

  $sql = mq("update host_info set password='".$userpw."' where email = '".$_SESSION['umail']."'");
  session_destroy();
  echo "<script>alert('비밀번호를 변경했습니다.'); document.location.href='../login.php';</script>";
}
 ?>
