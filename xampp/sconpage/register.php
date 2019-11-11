
<?php
include "./db.php"; ?>
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
						<form name="signUpForm" class="form" role="form" method="POST"action="./member/member_ok.php">
							<legend style="margin-top:8%;"><strong>회원가입</strong></legend>
	<!--form 태그 signUpForm -->
							<div class="row">.
								<div class="col-xs-6 col-md-6">
									<input type="text" name="name" class="form-control input-lg" placeholder="이름">
								</div>
							</div>
							<br>
							<input type="email" name="email" class="form-control input-lg" placeholder="Email">
							<br>
							<input onfocus="OnCheckPhone(this)" onKeyup="OnCheckPhone(this)" type="text" name="phone_number" class="form-control input-lg" placeholder="010-xxxx-xxxx">
							<br>
							<input type="password" name="password" class="form-control input-lg" placeholder="패스워드">
							<br>
							<input type="password" name="password2" class="form-control input-lg" placeholder="패스워드 재입력">
							<br>
							<label>성별 : </label>
							<input type="radio" name="gender" value="M">남자
							<input type="radio" name="gender" value="F">여자
							<br>
							<button style="margin-top:5%;background-color:#fed136; border-color:#fed136;"class="btn btn-lg btn-primary btn-block signup-btn" type="submit"><strong>회원가입</strong></button>
						</form>
						<div>

						</div>
					</div>
				</div>
			</div>
	</body>
</html>

<script>
function OnCheckPhone(oTa) {
    var oForm = oTa.form ;
    var sMsg = oTa.value ;
    var onlynum = "" ;
    var imsi=0;
    onlynum = RemoveDash2(sMsg);  //하이픈 입력시 자동으로 삭제함
    onlynum =  checkDigit(onlynum);  // 숫자만 입력받게 함
    var retValue = "";

    if(event.keyCode != 12 ) {
        if(onlynum.substring(0,2) == 02) {  // 서울전화번호일 경우  10자리까지만 나타나교 그 이상의 자리수는 자동삭제
                if (GetMsgLen(onlynum) <= 1) oTa.value = onlynum ;
                if (GetMsgLen(onlynum) == 2) oTa.value = onlynum + "-";
                if (GetMsgLen(onlynum) == 4) oTa.value = onlynum.substring(0,2) + "-" + onlynum.substring(2,3) ;
                if (GetMsgLen(onlynum) == 4) oTa.value = onlynum.substring(0,2) + "-" + onlynum.substring(2,4) ;
                if (GetMsgLen(onlynum) == 5) oTa.value = onlynum.substring(0,2) + "-" + onlynum.substring(2,5) ;
                if (GetMsgLen(onlynum) == 6) oTa.value = onlynum.substring(0,2) + "-" + onlynum.substring(2,6) ;
                if (GetMsgLen(onlynum) == 7) oTa.value = onlynum.substring(0,2) + "-" + onlynum.substring(2,5) + "-" + onlynum.substring(5,7) ; ;
                if (GetMsgLen(onlynum) == 8) oTa.value = onlynum.substring(0,2) + "-" + onlynum.substring(2,6) + "-" + onlynum.substring(6,8) ;
                if (GetMsgLen(onlynum) == 9) oTa.value = onlynum.substring(0,2) + "-" + onlynum.substring(2,5) + "-" + onlynum.substring(5,9) ;
                if (GetMsgLen(onlynum) == 10) oTa.value = onlynum.substring(0,2) + "-" + onlynum.substring(2,6) + "-" + onlynum.substring(6,10) ;
                if (GetMsgLen(onlynum) == 11) oTa.value = onlynum.substring(0,2) + "-" + onlynum.substring(2,6) + "-" + onlynum.substring(6,10) ;
                if (GetMsgLen(onlynum) == 12) oTa.value = onlynum.substring(0,2) + "-" + onlynum.substring(2,6) + "-" + onlynum.substring(6,10) ;
        }
        if(onlynum.substring(0,2) == 05 ) {  // 05로 시작되는 번호 체크
            if(onlynum.substring(2,3) == 0 ) {  // 050으로 시작되는지 따지기 위한 조건문
                    if (GetMsgLen(onlynum) <= 3) oTa.value = onlynum ;
                    if (GetMsgLen(onlynum) == 4) oTa.value = onlynum + "-";
                    if (GetMsgLen(onlynum) == 5) oTa.value = onlynum.substring(0,4) + "-" + onlynum.substring(4,5) ;
                    if (GetMsgLen(onlynum) == 6) oTa.value = onlynum.substring(0,4) + "-" + onlynum.substring(4,6) ;
                    if (GetMsgLen(onlynum) == 7) oTa.value = onlynum.substring(0,4) + "-" + onlynum.substring(4,7) ;
                    if (GetMsgLen(onlynum) == 8) oTa.value = onlynum.substring(0,4) + "-" + onlynum.substring(4,8) ;
                    if (GetMsgLen(onlynum) == 9) oTa.value = onlynum.substring(0,4) + "-" + onlynum.substring(4,7) + "-" + onlynum.substring(7,9) ; ;
                    if (GetMsgLen(onlynum) == 10) oTa.value = onlynum.substring(0,4) + "-" + onlynum.substring(4,8) + "-" + onlynum.substring(8,10) ;
                    if (GetMsgLen(onlynum) == 11) oTa.value = onlynum.substring(0,4) + "-" + onlynum.substring(4,7) + "-" + onlynum.substring(7,11) ;
                    if (GetMsgLen(onlynum) == 12) oTa.value = onlynum.substring(0,4) + "-" + onlynum.substring(4,8) + "-" + onlynum.substring(8,12) ;
                    if (GetMsgLen(onlynum) == 13) oTa.value = onlynum.substring(0,4) + "-" + onlynum.substring(4,8) + "-" + onlynum.substring(8,12) ;
          } else {
                if (GetMsgLen(onlynum) <= 2) oTa.value = onlynum ;
                if (GetMsgLen(onlynum) == 3) oTa.value = onlynum + "-";
                if (GetMsgLen(onlynum) == 4) oTa.value = onlynum.substring(0,3) + "-" + onlynum.substring(3,4) ;
                if (GetMsgLen(onlynum) == 5) oTa.value = onlynum.substring(0,3) + "-" + onlynum.substring(3,5) ;
                if (GetMsgLen(onlynum) == 6) oTa.value = onlynum.substring(0,3) + "-" + onlynum.substring(3,6) ;
                if (GetMsgLen(onlynum) == 7) oTa.value = onlynum.substring(0,3) + "-" + onlynum.substring(3,7) ;
                if (GetMsgLen(onlynum) == 8) oTa.value = onlynum.substring(0,3) + "-" + onlynum.substring(3,6) + "-" + onlynum.substring(6,8) ; ;
                if (GetMsgLen(onlynum) == 9) oTa.value = onlynum.substring(0,3) + "-" + onlynum.substring(3,7) + "-" + onlynum.substring(7,9) ;
                if (GetMsgLen(onlynum) == 10) oTa.value = onlynum.substring(0,3) + "-" + onlynum.substring(3,6) + "-" + onlynum.substring(6,10) ;
                if (GetMsgLen(onlynum) == 11) oTa.value = onlynum.substring(0,3) + "-" + onlynum.substring(3,7) + "-" + onlynum.substring(7,11) ;
                if (GetMsgLen(onlynum) == 12) oTa.value = onlynum.substring(0,3) + "-" + onlynum.substring(3,7) + "-" + onlynum.substring(7,11) ;
          }
        }

        if(onlynum.substring(0,2) == 03 || onlynum.substring(0,2) == 04  || onlynum.substring(0,2) == 06  || onlynum.substring(0,2) == 07  || onlynum.substring(0,2) == 08 ) {  // 서울전화번호가 아닌 번호일 경우(070,080포함 // 050번호가 문제군요)
                if (GetMsgLen(onlynum) <= 2) oTa.value = onlynum ;
                if (GetMsgLen(onlynum) == 3) oTa.value = onlynum + "-";
                if (GetMsgLen(onlynum) == 4) oTa.value = onlynum.substring(0,3) + "-" + onlynum.substring(3,4) ;
                if (GetMsgLen(onlynum) == 5) oTa.value = onlynum.substring(0,3) + "-" + onlynum.substring(3,5) ;
                if (GetMsgLen(onlynum) == 6) oTa.value = onlynum.substring(0,3) + "-" + onlynum.substring(3,6) ;
                if (GetMsgLen(onlynum) == 7) oTa.value = onlynum.substring(0,3) + "-" + onlynum.substring(3,7) ;
                if (GetMsgLen(onlynum) == 8) oTa.value = onlynum.substring(0,3) + "-" + onlynum.substring(3,6) + "-" + onlynum.substring(6,8) ; ;
                if (GetMsgLen(onlynum) == 9) oTa.value = onlynum.substring(0,3) + "-" + onlynum.substring(3,7) + "-" + onlynum.substring(7,9) ;
                if (GetMsgLen(onlynum) == 10) oTa.value = onlynum.substring(0,3) + "-" + onlynum.substring(3,6) + "-" + onlynum.substring(6,10) ;
                if (GetMsgLen(onlynum) == 11) oTa.value = onlynum.substring(0,3) + "-" + onlynum.substring(3,7) + "-" + onlynum.substring(7,11) ;
                if (GetMsgLen(onlynum) == 12) oTa.value = onlynum.substring(0,3) + "-" + onlynum.substring(3,7) + "-" + onlynum.substring(7,11) ;

        }
        if(onlynum.substring(0,2) == 01) {  //휴대폰일 경우
            if (GetMsgLen(onlynum) <= 2) oTa.value = onlynum ;
            if (GetMsgLen(onlynum) == 3) oTa.value = onlynum + "-";
            if (GetMsgLen(onlynum) == 4) oTa.value = onlynum.substring(0,3) + "-" + onlynum.substring(3,4) ;
            if (GetMsgLen(onlynum) == 5) oTa.value = onlynum.substring(0,3) + "-" + onlynum.substring(3,5) ;
            if (GetMsgLen(onlynum) == 6) oTa.value = onlynum.substring(0,3) + "-" + onlynum.substring(3,6) ;
            if (GetMsgLen(onlynum) == 7) oTa.value = onlynum.substring(0,3) + "-" + onlynum.substring(3,7) ;
            if (GetMsgLen(onlynum) == 8) oTa.value = onlynum.substring(0,3) + "-" + onlynum.substring(3,7) + "-" + onlynum.substring(7,8) ;
            if (GetMsgLen(onlynum) == 9) oTa.value = onlynum.substring(0,3) + "-" + onlynum.substring(3,7) + "-" + onlynum.substring(7,9) ;
            if (GetMsgLen(onlynum) == 10) oTa.value = onlynum.substring(0,3) + "-" + onlynum.substring(3,6) + "-" + onlynum.substring(6,10) ;
            if (GetMsgLen(onlynum) == 11) oTa.value = onlynum.substring(0,3) + "-" + onlynum.substring(3,7) + "-" + onlynum.substring(7,11) ;
            if (GetMsgLen(onlynum) == 12) oTa.value = onlynum.substring(0,3) + "-" + onlynum.substring(3,7) + "-" + onlynum.substring(7,11) ;
        }

        if(onlynum.substring(0,1) == 1) {  // 1588, 1688등의 번호일 경우
            if (GetMsgLen(onlynum) <= 3) oTa.value = onlynum ;
            if (GetMsgLen(onlynum) == 4) oTa.value = onlynum + "-";
            if (GetMsgLen(onlynum) == 5) oTa.value = onlynum.substring(0,4) + "-" + onlynum.substring(4,5) ;
            if (GetMsgLen(onlynum) == 6) oTa.value = onlynum.substring(0,4) + "-" + onlynum.substring(4,6) ;
            if (GetMsgLen(onlynum) == 7) oTa.value = onlynum.substring(0,4) + "-" + onlynum.substring(4,7) ;
            if (GetMsgLen(onlynum) == 8) oTa.value = onlynum.substring(0,4) + "-" + onlynum.substring(4,8) ;
            if (GetMsgLen(onlynum) == 9) oTa.value = onlynum.substring(0,4) + "-" + onlynum.substring(4,8) ;
            if (GetMsgLen(onlynum) == 10) oTa.value = onlynum.substring(0,4) + "-" + onlynum.substring(4,8) ;
            if (GetMsgLen(onlynum) == 11) oTa.value = onlynum.substring(0,4) + "-" + onlynum.substring(4,8) ;
            if (GetMsgLen(onlynum) == 12) oTa.value = onlynum.substring(0,4) + "-" + onlynum.substring(4,8) ;
        }
    }
}

function RemoveDash2(sNo) {
var reNo = ""
for(var i=0; i<sNo.length; i++) {
    if ( sNo.charAt(i) != "-" ) {
    reNo += sNo.charAt(i)
    }
}
return reNo
}

function GetMsgLen(sMsg) { // 0-127 1byte, 128~ 2byte
var count = 0
    for(var i=0; i<sMsg.length; i++) {
        if ( sMsg.charCodeAt(i) > 127 ) {
            count += 2
        }
        else {
            count++
        }
    }
return count
}

function checkDigit(num) {
    var Digit = "1234567890";
    var string = num;
    var len = string.length
    var retVal = "";

    for (i = 0; i < len; i++)
    {
        if (Digit.indexOf(string.substring(i, i+1)) >= 0)
        {
            retVal = retVal + string.substring(i, i+1);
        }
    }
    return retVal;
}

</script>
