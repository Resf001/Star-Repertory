<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
    <meta name="description" content="<?= $pageDescrition ?>">
    
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <?php if(!empty($_SESSION['user'])): ?>
    <div class="account">
        <div class="pseudo">
            <p><?= $_SESSION['user']['name']?></p>
        </div>
        <div class="infos">
            <p>User id : <?= $_SESSION['user']['id'] ?></p>
            <form action="" method="post">
                <button class="button primary tiny" type="submit" name="buttonLogOut" value="logout">Log Out</button>
            </form>
        </div>
    </div>
    <?php endif ?>
    <?= $pageContent ?? "" ?>
</body>
</html>
<script src="../js/app.js"></script> 
