<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<title>Регистрация</title>
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
<div class="container">
      <div class="py-5 text-center">
        <h2>Регистрационная форма</h2>
      </div>
      <div class="row">
        <div class="col-md-8 order-md-1">
          <form class="needs-validation" novalidate="">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Имя</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Имя пользователя</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="username" placeholder="Username" required="">
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email.
              </div>
            </div>
                <div class="row">
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-black btn-lg btn-block" href="/lk.php" type="submit">Зарегистрироваться</button>
          </form>
        </div>
      </div>
      <?php require "blocks/footer.php" ?>
      </body>
      </html>
