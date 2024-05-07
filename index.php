<?php

/**
 * Web under construction
 * 
 * @package Web under construction
 * @version 1.0.0
 * @author  https://github.com/arodu
 * @license MIT
 */

// Background image
$background = './background.jpg';

// Message in different languages
$message = [
    'en' => 'Web under construction',
    'es' => 'Web en construcción',
    'it' => 'Web in costruzione',
    'pt' => 'Web em construção',
    'de' => 'Web im Aufbau',
    'fr' => 'Web en construction',
    'ru' => 'Сеть в разработке',
    'nl' => 'Web in aanbouw',
    'ja' => '建設中のウェブ',
    'ko' => '웹 구축 중'
];

// Default language
$lang_default = 'en';
?>

<?php
$lang = strtolower(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2));
$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$name = $_SERVER['SERVER_NAME'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $name ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="dark">
    <div class="wrap" style="background-image: url(<?= $background ?>);">
        <div class="message">
            <h1><?= isset($message[$lang]) ? $message[$lang] : $message[$lang_default] ?></h1>
            <a href="<?= $link ?>">
                <?= $name ?>
            </a>
        </div>
    </div>
</body>

</html>