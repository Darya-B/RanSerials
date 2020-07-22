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

    <form class="form-signin" action="/auth.php" target="_blank">
  <div class="text-center mb-4">
    <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Добавить сериал</font></font>
  </div>

  <div class="form-label-group">
    <input type="serial" id="inputserial" class="form-control"  required="" autofocus="">
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Отправить</font></font></button>
</form>

<form class="form-signin" action="/auth.php" target="_blank">
<div class="text-center mb-4">
<img class="mb-4" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Вопросы и предложения</font></font>
</div>

<div class="form-label-group">
<input type="question" id="inputQuestion" class="form-control"  required="" autofocus="">
</div>

<button class="btn btn-lg btn-primary btn-block" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Отправить</font></font></button>
</form>
<?php require "blocks/footer.php" ?>
</body>
</html>
