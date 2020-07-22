<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<title>RanSerials</title>
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
<div class="jumbotron">
    <div class="container">
      <h1 class="display-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Что сегодня посмотреть?</font></font></h1>
      <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit; color:purple">Выбор сериала на вечер случайным образом</font></font></p>
      <p><a class="btn btn-light btn-lg" href="/random.php" role="button"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Мне повезет</font></font></a></p>
    </div>
		<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
<h5 class="my-0 mr-md-auto font-weight-normal"></h5>
</div>
		<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Для компании друзей</h4>
      </div>
      <div class="card-body">
        <img src="/img/friends.jpg" width=300 height=250>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Подборка сериалов</li>
          <li>для вечера в компании</li>
          <li>своих друзей</li>
        </ul>
        <a type="button" class="btn btn-lg btn-block btn-outline-light" href="/serials.php">Подробнее</a>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Научные сериалы</h4>
      </div>
      <div class="card-body">
        <img src="/img/sc.jpg" width=300 height=250>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Подборка сериалов</li>
          <li>для того,</li>
          <li>чтобы узнать новое</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-light">Подробнее</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Романтика</h4>
      </div>
      <div class="card-body">
         <img src="/img/rom.jpg" width=300 height=250>
        <ul class="list-unstyled mt-3 mb-4">
          <li>15 самых </li>
          <li>популярных</li>
          <li>романтических фильмов</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-light">Подробнее</button>
      </div>
    </div>
  </div>
</div>
  </div>
<?php require "blocks/footer.php" ?>
</body>
</html>
