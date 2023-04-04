<?php
use Phppot\Member;

if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/Model/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();
}
?>
<html>
<head>
	<title>Главная</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width">
	<link href="css/login.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="container" id="container">
		<div class="form-container sign-in-container">
			<img src="images/logo.png" class="logo" alt="Logo">
			<div class="sign-up-container" style="display: contents;">
			
			<div class="signup-align">
				<form name="login" action="" method="post"
					onsubmit="return loginValidation()">
					<div class="signup-heading">Войти</div>
                    <span>Парковки и зарядные станции Душанбе</span>
				<?php if(!empty($loginResult)){?>
				<div class="error-msg"><?php echo $loginResult;?></div>
				<?php }?>
				<div class="row">
						<div class="inline-block">
							<input class="input-box-330" type="text" name="username" placeholder="Логин"
								id="username">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<input class="input-box-330" type="password"
								name="login-password" id="login-password" placeholder="Пароль">
						</div>
					</div>
					<div class="row">
						<input class="btn" type="submit" name="login-btn"
							id="login-btn" value="Вход">
					</div>
                    <div class="login-signup">Нет Аккаунта? 
				<a href="user-registration.php">Зарегестрируетесь</a>
			</div>
				</form>
			</div>
		</div>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<object type="image/svg+xml" data="images/bac.svg" class="bac" alt="Background"></object>
					<h3 class="index ttt">Легкий поиск парковок и зарядных станций</h3>
					<p class="index fff">Найдите парковку и зарядную станцию, вы можете сразу заплатить за проведенное время. Так же можно оплатить штрафы.</p>
				</div>
			</div>
		</div>
	</div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
function loginValidation() {
	var valid = true;
	$("#username").removeClass("error-field");
	$("#password").removeClass("error-field");

	var UserName = $("#username").val();
	var Password = $('#login-password').val();

	$("#username-info").html("").hide();

	if (UserName.trim() == "") {
		$("#username-info").html("required.").css("color", "#ee0000").show();
		$("#username").addClass("error-field");
		valid = false;
	}
	if (Password.trim() == "") {
		$("#login-password-info").html("required.").css("color", "#ee0000").show();
		$("#login-password").addClass("error-field");
		valid = false;
	}
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}
</script>
</body>
</html>
