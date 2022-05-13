<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
    <meta name="description" content="<?= $pageDescrition ?>">
    <script src="../js/app.js"></script>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <?= $pageContent ?? "" ?>
</body>
</html>