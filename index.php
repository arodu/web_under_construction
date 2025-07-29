<?php

/**
 * Web under construction
 * 
 * @package Web under construction
 * @version 1.1.0
 * @author  https://github.com/arodu
 * @license MIT
 */

// image, color, or none
$background_type = 'color';
$background_image = './background.jpg';
$background_color = '#336699';

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

$lang = strtolower(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2));
$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$name = $_SERVER['SERVER_NAME'];

$background_style = '';
if ($background_type === 'image' && file_exists($background_image)) {
    $background_style = 'background-image: url(' . $background_image . '); background-repeat: no-repeat; background-size: cover; background-position: center;';
} elseif ($background_type === 'color') {
    $background_style = 'background-color: ' . $background_color . ';';
} else {
    $background_style = 'background-color: transparent;';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $name ?></title>
    <style>
        body {
            font-size: 1.2rem;
            font-family: Helvetica, Arial, sans-serif;
            margin: 0;
        }

        .wrap {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .wrap .message {
            border-radius: .6rem;
            text-align: center;
            padding: 1rem;
            margin: 1rem;
        }

        .wrap h1 {
            font-size: 2rem;
        }

        /* Estilos para el tema oscuro */
        .dark .wrap .message {
            background-color: rgba(0, 0, 0, .6);
        }

        .dark .wrap,
        .dark .wrap a {
            color: #fff;
        }

        /* Estilos para el tema claro */
        .light .wrap .message {
            background-color: rgba(255, 255, 255, .6);
        }

        .light .wrap,
        .light .wrap a {
            color: #000;
        }
    </style>

</head>

<body class="dark">
    <div class="wrap" style="<?= $background_style ?>">
        <div class="message">
            <h1><?= isset($message[$lang]) ? $message[$lang] : $message[$lang_default] ?></h1>
            <a href="<?= $link ?>"><?= $name ?></a>
        </div>
    </div>
</body>

</html>