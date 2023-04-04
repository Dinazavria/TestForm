<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Тестовое задание 1</title>
    <link rel="stylesheet" href="/public/css/main.css">
    <link rel="stylesheet" href="/public/css/form.css">
    <link rel="stylesheet" href="/public/css/adaptive.css">
</head>
<body>
<?php require 'public/blocks/header.php' ?>
<div class="container">
    <div class="content">
        <h1>Свяжитесь с нами</h1>
        <div class="info">
            <div class="contacts">
                <h2>Email:</h2>
                <p>support@example.com</p>
                <h2>Телефон:</h2>
                <p>+7 999 111 23 45</p>

            </div>
            <div class="contact-form">
                <form action="index.php" method="post">
                    <input type="text" placeholder="Ваше имя">
                    <input type="tel" placeholder="Ваш номер телефона">
                    <input type="email" placeholder="Ваш email">
                    <textarea placeholder="Ваш комментарий" rows="3"></textarea>
                    <div class="checkbox"><input type="checkbox" id="personal"><label class="personal-data" for="personal">Я согласен/на на обработку персональных данных</label></div>
                    <button>Отправить</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php //require 'public/blocks/footer.php' ?>

    <style>
        var textarea = document.getElementsByTagName('textarea')[0];

        textarea.addEventListener('keydown', resize);

        function resize() {
            var el = this;
        setTimeout(function() {
            el.style.cssText = 'height:auto; padding:0';
            el.style.cssText = 'height:' + el.scrollHeight + 'px';
        }, 1);
        }
    </style>
</body>
</html>
