<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css " rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <title>Pop it MVC</title>
</head>
<body class='bg-secondary'>
<header>
   <nav>
       <a href="<?= app()->route->getUrl('/hello') ?>">Главная</a>
       <?php
       if (!app()->auth::check()):
           ?>
           <a href="<?= app()->route->getUrl('/login') ?>">Вход</a>
           <a href="<?= app()->route->getUrl('/signup') ?>">Регистрация</a>
           <a href="<?= app()->route->getUrl('/frames') ?>">Отдел кадров</a>
           <a href="<?= app()->route->getUrl('/colculate_compos') ?>">Подсчет состава</a>
           <a href="<?= app()->route->getUrl('/department_sel') ?>">Выбор подразделения</a>
           <a href="<?= app()->route->getUrl('/tier') ?>">Прикрепить сотрудника</a>
           <a href="<?= app()->route->getUrl('/Add_employee') ?>">Добавить сотрудника отдела кадров</a>
       <?php
       else:
           ?>
           <a href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->name ?>)</a>
       <?php
       endif;
       ?>
   </nav>
</header>
<main>
   <?= $content ?? '' ?>
</main>

</body>
<style>
    header{
        background-color: darkslategrey;
    }
   a{
      color:lightblue;
   }
   .center{
    text-align: center;
    padding: 5px 10px;
    margin-top: 40px;
    background-color: lightblue;
  }
  label{
   text-align: start;
  }
  .column{
   display: flex;
   flex-direction: column;
   gap:10px;
  }

  button:hover{
    background-color: aqua;
  }

  .count_input{
    width: 40px;
    margin-left: 20px;
  }

  #department_button{
    width: 65px;
    margin-left: 20px;
  }

  #emp_button{
    width: 85px;
    margin-left: 20px;
  }

  .list_ul{
    text-align: start;
  }
   </style>
</html>
