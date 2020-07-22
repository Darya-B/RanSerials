<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<title>Моя страница</title>
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
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
        <a class="btn btn-sm btn-outline-secondary" href="/OS.php">Обратная связь</a>
        </div>
      </header>
      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Личные подборки</h1>
        </div>
      </div>

      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">Посмотреть позже</strong>
              <h3 class="mb-0">
								<div class="checkbox">
	          <label>
	            <input type="checkbox" value="remember-me"> Сериал 1
	          </label>
						<label>
	            <input type="checkbox" value="remember-me"> Сериал 2
	          </label>
						<label>
	            <input type="checkbox" value="remember-me"> Фильм 1
	          </label>
	        </div>
              </h3>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Срочно посмотреть</strong>
							<h3 class="mb-0">
								<div class="checkbox">
							<label>
							<input type="checkbox" value="remember-me"> Сериал 1
							</label>
							<label>
							<input type="checkbox" value="remember-me"> Сериал 2
							</label>
							<label>
							<input type="checkbox" value="remember-me"> Фильм 1
							</label>
							</div>
							</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php require "blocks/footer.php" ?>
</body>
</html>
