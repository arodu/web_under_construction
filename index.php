<?php
  $message = [
    'es'=>'Web en construcción',
    'en'=>'Web under construction',
    'pt'=>'Web em construção',
    'ge'=>'Web im Aufbau',
    'fr'=>'Web en construction',
    'ru'=>'Сеть в разработке',
  ];
  $lang = strtolower(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2));
  $lang_default = 'en';
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
  <div class="wrap">
    <div class="message">
      <h1><?= isset($message[$lang]) ? $message[$lang] : $message[$lang_default] ?></h1>
      <a href="<?= $link ?>">
        <?= $name ?>
      </a>
    </div>
  </div>
</body>
</html>