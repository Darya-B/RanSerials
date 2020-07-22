<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<title>Вход в систему</title>
	<style type="text/css">
   div {
    overflow: auto;
    padding-left: 15px;
    background: #f0abff;
   }
  </style>
</head>
<body>
<?php require "blocks/header.php" ?>
<body>
	<a class="btn btn-outline-black" href="/reg.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Регистрация</font></font></a>

    <form class="form-signin" action="/auth.php" target="_blank">
  <div class="text-center mb-4">
    <img class="mb-4" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Войти в личный кабинет</font></font>
  </div>

  <div class="form-label-group">
    <input type="email" id="inputEmail" class="form-control" placeholder="Адрес электронной почты" required="" autofocus="">
    <label for="inputEmail"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Адрес электронной почты</font></font></label>
  </div>

  <div class="form-label-group">
    <input type="password" id="inputPassword" class="form-control" placeholder="пароль" required="">
    <label for="inputPassword"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Пароль</font></font></label>
  </div>

  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Запомнить меня
    </font></font></label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Войти</font></font></button>
</form>
<div class="goog-te-spinner-pos"><div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div></body>
<?php require "blocks/footer.php" ?>
</body>
</html>
