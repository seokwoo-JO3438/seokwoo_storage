

<!DOCTYPE html>
<html ng-app="form-demo-app">
	<head>
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


    <style>
    body{
      background-color:#f2f3f5;
    }
    </style>
	</head>
	<body>
			<div class="container" id="wrap" style="margin-top:7%;">
				<div class="row">
					<div class="col-md-6 col-md-offset-3" style="background-color:#FFFFFF; border:solid 2px #FFFFFF; padding: 0 30px 75px 30px">

            <form name="signUpForm" class="form" role="form" method="POST"action="./member/re_password.php">
							<legend style="margin-top:8%;"><strong>비밀번호 변경</strong></legend>
	<!--form 태그 signUpForm -->
                <br>
  							<input type="password" name="password3" class="form-control input-lg" placeholder="새로운 비밀번호">
                <br>
  							<input type="password" name="password4" class="form-control input-lg" placeholder="비밀번호 재입력">
							<br>
							<button style="margin-top:5%;background-color:#fed136; border-color:#fed136;"class="btn btn-lg btn-primary btn-block signup-btn" type="submit"><strong>비밀번호 변경</strong></button>
						</form>
						<div>

						</div>
					</div>
				</div>
			</div>
	</body>
</html>
