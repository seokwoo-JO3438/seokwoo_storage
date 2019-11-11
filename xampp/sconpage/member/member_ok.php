<?php
	include "../db.php";
	include "../password.php";

	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
	$password = htmlspecialchars($_POST['password']);
	$password2 = htmlspecialchars($_POST['password2']);
	$sex = htmlspecialchars($_POST['gender']);
	$phone_number = htmlspecialchars($_POST['phone_number']);

	if($name==NULL && $email == NULL && $password ==NULL && $password2 == NULL && $sex == NULL && $phone_number==NULL)
	{
		echo"<script>alert('모든 칸을 채워주세요.'); history.back();</script>";
	}
	else if($password!=$password2)
	{
		echo "<script>alert('비밀번호와 비밀번호 확인이 서로 다릅니다.'); history.back();</script>";
	}
	else if($name==NULL)
	{
		echo "<script>alert('이름을 입력해주세요.'); history.back();</script>";
	}
	else if($email==NULL)
	{
		echo "<script>alert('이메일을 입력해주세요.'); history.back();</script>";
	}
	else if($password==NULL)
	{
		echo "<script>alert('비밀번호를 입력해주세요.'); history.back();</script>";
	}
	else if($phone_number==NULL)
	{
		echo "<script>alert('전화번호를 입력해주세요.'); history.back();</script>";
	}
		else{
		$password = password_hash($password,PASSWORD_DEFAULT);
		$sql = mq("insert into host_info (name,email,phone_number,password,sex) values('".$name."','".$email."','".$phone_number."','".$password."','".$sex."')");
		echo "<script>alert('회원가입이 완료되었습니다.');</script>";
		echo "<script>document.location.href='../login.php';</script>";
		}
?>
<meta charset="utf-8" />
<meta http-equiv="refresh" content="0 url=/">
