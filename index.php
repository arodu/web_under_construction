<?php
  $message = [
    'es'=>'Web en construcción',
    'en'=>'Web under construction',
  ];
  $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $_SERVER['SERVER_NAME'] ?></title>
  <link rel="stylesheet" href="style.css">

</head>
<body class="dark">
  <div class="wrap">
    <div class="message">
      <h1><?= isset($message[$lang]) ? $message[$lang] : $message['en'] ?></h1>
      <a href="<?= $_SERVER['HTTP_HOST'] ?>">
        <?= $_SERVER['SERVER_NAME'] ?>
      </a>
    </div>
  </div>
</body>
</html>