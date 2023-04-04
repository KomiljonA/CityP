<?php
use Phppot\Member;

if (! empty($_POST["signup-btn"])) {
    require_once './Model/Member.php';
    $member = new Member();
    $registrationResponse = $member->registerMember();
    if ($registrationResponse["status"] == "success") {
        header('Location: login.php');
        exit;
    }
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
			<div class="">
				<form name="sign-up" action="" method="post"
					onsubmit="return signupValidation()">
					<div class="signup-heading">Регистрация</div>
                    
				<?php
    if (! empty($registrationResponse["status"])) {
        ?>
                    <?php
        if ($registrationResponse["status"] == "error") {
            ?>
				    <div class="server-response error-msg"><?php echo $registrationResponse["message"]; ?></div>
                    <?php
        } else if ($registrationResponse["status"] == "success") {
            ?>
                    <div class="server-response success-msg"><?php echo $registrationResponse["message"]; ?></div>
                    <?php
        }
        ?>
				<?php
    }
    ?>
				<div class="error-msg" id="error-msg"></div>
					<div class="row">
						<div class="inline-block">
							<input class="input-box-330" type="text" name="username" placeholder="Логин"
								id="username" >
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<input class="input-box-330" type="email" name="email" id="email" placeholder="Почтовый адресс" >
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<input class="input-box-330" type="password"
								name="signup-password" id="signup-password" placeholder="Пароль" >
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<input class="input-box-330" type="password"
								name="confirm-password" id="confirm-password" placeholder="Повторите пароль" >
						</div>
					</div>
					<div class="row">
						<input class="btn" type="submit" name="signup-btn"
							id="signup-btn" value="Регистрация">
					</div>
                    <div class="login-signup">Есть аккаунт?
				<a href="login.php">Войти</a>
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
                <!--@Komiljon0990DCPARKING-->
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        function signupValidation() {
            var valid = true;

            $("#username").removeClass("error-field");
            $("#email").removeClass("error-field");
            $("#password").removeClass("error-field");
            $("#confirm-password").removeClass("error-field");

            var UserName = $("#username").val();
            var email = $("#email").val();
            var Password = $('#signup-password').val();
            var ConfirmPassword = $('#confirm-password').val();
            var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

            $("#username-info").html("").hide();
            $("#email-info").html("").hide();

            if (UserName.trim() == "") {
                $("#username-info").html("required.").css("color", "#ee0000").show();
                $("#username").addClass("error-field");
                valid = false;
            }
            if (email == "") {
                $("#email-info").html("required").css("color", "#ee0000").show();
                $("#email").addClass("error-field");
                valid = false;
            } else if (email.trim() == "") {
                $("#email-info").html("Invalid email address.").css("color", "#ee0000").show();
                $("#email").addClass("error-field");
                valid = false;
            } else if (!emailRegex.test(email)) {
                $("#email-info").html("Invalid email address.").css("color", "#ee0000")
                        .show();
                $("#email").addClass("error-field");
                valid = false;
            }
            if (Password.trim() == "") {
                $("#signup-password-info").html("required.").css("color", "#ee0000").show();
                $("#signup-password").addClass("error-field");
                valid = false;
            }
            if (ConfirmPassword.trim() == "") {
                $("#confirm-password-info").html("required.").css("color", "#ee0000").show();
                $("#confirm-password").addClass("error-field");
                valid = false;
            }
            if(Password != ConfirmPassword){
                $("#error-msg").html("Оба пароля должны быть одинаковыми.").show();
                valid=false;
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
