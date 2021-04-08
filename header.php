<!doctype html>
<?php include "db.php"; ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta name="description" content="Мебель и декоративные изделия из массива ручной работы от производителя. +7 (912) 345-67-89"> 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/main.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="owl.carousel.min.js"></script>
  
    <title>Наш дом - наше отражение</title>
  </head>

  <body>
  <div id="top-link">
    <a class="up" href="#top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
  </div>

  <nav class="navbar align-items-start navbar-expand-xl navbar-light">
    <a class="navbar-brand logo" href="index.php"><img src="images/logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link margin20" href="index.php">Главная</a>
          </li>     
          <li class="nav-item">
            <a class="nav-link margin20" href="catalog.php">Каталог</a>
          </li>
          <li class="nav-item">
            <a class="nav-link margin20" href="poeskizam.php">Изделия по эскизам</a>
          </li>
          <li class="nav-item">
            <a class="nav-link margin20" href="contacts.php">Контакты</a>
          </li>  

        </ul>
        <form class="form-inline margin20" action="search.php?search=<?=$_GET["search"]?>" method="GET">
          <input name="search" class="form-control" type="text" placeholder="Что искать?">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">поиск</button>
        </form>        
      </div>
    </div>
    <div class="navbar-brand contacts align-right">
      <p>Работаем с 10:00 до 20:00<br><span><a href="tel:+79214046774>">+7 (921) 404-67-74</a></span><br><a data-toggle="modal" data-target="#exampleModal" href="">• напиши нам</a></p>
    </div>
  </nav>