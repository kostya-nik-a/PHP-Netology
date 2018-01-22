<?php
    $userName = 'Костяева Анна';
    $userAge = '35';
    $userEMail = 'kostya.nik.a@yandex.ru';
    $userTown = 'Новосибирск';
    $userAboutMe = 'Обучаюсь на курсе Нетологии "веб-разработчик"';
?>

<!DOCTYPE>
<html lang="ru">
  <head>
    <title>Домашнее задание к лекции 1.1 «Введение в PHP»</title>
    <meta charset="utf-8">
    <style>
      body {
        font-family: sans-serif;  
      }
      dl {
        display: table-row;
      }
      dt, dd {
        display: table-cell;
        padding: 5px 10px;
      }
    </style>
    </head>
    <body>
        <h1>Информация о студенте Нетологии - Костяева А.Н.</h1>
        <dl>
            <dt>Имя:</dt>
            <dd><?= $userName ?></dd>
        </dl>
        <dl>
            <dt>Возраст:</dt>
            <dd><?= $userAge ?></dd>
        </dl>
        <dl>
            <dt>Адрес электронной почты:</dt>
            <dd><a href="mailto:<?= $userEMail ?>"><?= $userEMail ?></a></dd>
        </dl>
        <dl>
            <dt>Город:</dt>
            <dd><?= $userTown ?></dd>
        </dl>
        <dl>
            <dt>О себе:</dt>
            <dd><?= $userAboutMe ?></dd>
        </dl>
    </body>
</html>
