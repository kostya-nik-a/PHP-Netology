<?php
    $userName = 'Костяева Анна'
    $userAge = '35'
    $userEMail = 'kostya.nik.a@yandex.ru'
    $userTown = 'Новосибирск'
    $userAboutMe = 'Работаю. Учусь в Нетологии на профессию "веб-разработчик"'
php>

<!DOCTYPE>
<html lang="ru">
  <head>
    <title>PHP - Домашнее задание №1</title>
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
        <h1>Информация о пользователе Костяева Анна</h1>
        <dl>
            <dt>Имя</dt>
            <dd><?= $userName ?></dd>
        </dl>
        <dl>
            <dt>Возраст</dt>
            <dd><?= $userAge ?></dd>
        </dl>
        <dl>
            <dt>Адрес электронной почты</dt>
            <dd><a href="mailto:dfitiskin@gmail.com">dfitiskin@gmail.com</a></dd>
        </dl>
        <dl>
            <dt>Город</dt>
            <dd><?= $userTown ?></dd>
        </dl>
        <dl>
            <dt>О себе</dt>
            <dd><?= $userAboutMe ?></dd>
        </dl>
    </body>
</html>
