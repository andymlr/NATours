<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Natours | Exciting tours for adventurous people</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">
    
    <link rel="stylesheet" href="<?= BASE_URL ?>css/icon-font.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>css/main.css">
    <link rel="icon" href="<?= BASE_URL ?>image/favicon.png">
</head>
<body>
    <?= Template::partial('nav') ?>
    <?= Template::display($data) ?>
    <?= Template::partial('footer') ?>

    <script>
        function closeNav() {
            document.getElementById("nav-toggle").checked = false;
        }
  </script>
</body>
</html>