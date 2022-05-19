<?

if ($_POST['who'] == 'robot') {
    header('Refresh: 5; URL=https://badiko.php');
    echo ('<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body><h1 style="color:red">Ошибка!</h1>
    <p><b>Не отправлено,</b> так как вы являетесь роботом!<br>
    Через 5 секунд вы вернетесь на главную страницу.</body></p>');
} elseif ($_POST['mail'] == true) {
    $mail = $_POST['mail'];
    if ($_POST['name'] == true) {
        $name = $_POST['name'];
    } else {
        $name = 'Отправитель';
    };

    if ($_POST['phone'] == true) {
        $phone = $_POST['phone'];
    } else {
        $phone = 'Телефон';
    };

    if ($_POST['company'] == true) {
        $company = $_POST['company'];
    } else {
        $company = 'Компания';
    };

    if ($_POST['site'] == '') {
        $site = $_POST['website'];
    } else {
        $site = 'Сайт отправителя';
    };

    if ($_POST['product'] !== true) {
        $product = $_POST['product'];
    } else {
        $product = 'Продукт';
    };

    if ($_POST['services'] == none) {
        $ser = 'Услуга не выбрана';
    } elseif ($_POST['services'] == 1) {
        $ser = 'Программирование';
    } elseif ($_POST['services'] == 2) {
        $ser = 'Преподование';
    } elseif ($_POST['services'] == 3) {
        $ser = 'Робототехника';
    } elseif ($_POST['services'] == 4) {
        $ser = 'Дизайнерство';
    } elseif ($_POST['services'] == 5) {
        $ser = 'Маркетинг';
    } elseif ($_POST['services'] == 6) {
        $ser = 'Обучения';
    } elseif ($_POST['services'] == 7) {
        $ser = 'Услуга_';
    } else {
        $ser = 'Услуга_последняя';
    }

    if ($_POST['message'] == true) {
        $question = $_POST['message'];
    } else {
        $message = 'Доп. информация';
    };

    $mess = '
    Отправитель: ' . $name . '
    E-mail:' . $mail . '
    Телефон:' . $phone . '
    Из компании: ' . $company . '
    Сайт отправителя: ' . $site . '
    Продукт: ' . $product . '
    Необходимые услуги: ' . $ser . '
    Доп. информация: ' . $message;

    $email = 'rizobeksaibov@gmail.com';
    $headers = "From: $email\r\nReply-To: $email" . "\r\n" . "MIME-Version: 1.0\r\nContent-type: text/plain; charset=utf-8";

    mail('rizobeksaibov@gmail.com', 'registration.html', $mess, $headers);
    header('Refresh: 5; URL=http://badiko.uz/badiko.php');
    echo ('<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body><h1>Ваше сообщение отправлено!</h1>
    <p>Наши специалисты свяжутся с вами в ближайшее время.<br>
    Через 5 секунд вы вернетесь на главную страницу.</body>');
    $title = 'Сообщение отправелно';
} else {
    header('Refresh: 5; URL=http://badiko.uz/registration.html');
    echo ('<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body><h1 class="red">Ошибка отправки сообщения!</h1><p>Проверьте правильность заполненных данных.<br>
    Через 5 секунд вы вернетесь на главную страницу.');
    $title = 'Ошибка!';

};

echo ('<br/><br/>');

?>

<?php
include $_SERVER['registration.html'] . '/badiko.uz/badiko.php';
include $_SERVER['registration.html'] . '/badiko.uz/badiko.php'; ?>