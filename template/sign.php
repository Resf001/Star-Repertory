<?php

session_start();

use App\PDO\LogPDO;
use App\PDO\SignPDO;

$pageTitle = "Sign in";
$pageDescrition = "Description";
$log = false;
$errors = null;
$succes = false;

if (!empty($_POST['buttonLogOut'])){
    unset($_SESSION['user'], $_POST['buttonLogOut']);
}

if (!empty($_POST)){
    $signPut = new SignPDO($_POST, $pdo); 
    $errors = $signPut->verifyData();
    if (!$errors) {
        try {
            $errors = $signPut->putPDO();
        } catch (PDOException $e){
            $errors["PDO"] = $e;
        }
        if(!$errors) {
            LogPDO::logIn($pdo->lastInsertId(), 1, $_POST['name']);
            unset($_POST);
        }
    }
}
?>
<div class="sign">
<?php if (empty($_SESSION['user'])): ?>
    <h1>Sign-In</h1>
    <form action="" method="post" class="sign__form">
        <div class="sign__element">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?= $_POST ? $_POST['name'] : '' ?>">
        </div>
        <div class="sign__element">
            <label for="firstname">FirstName</label>
            <input type="text" name="firstname" id="firstname" value="<?=$_POST ? $_POST['firstname'] : '' ?>">
        </div>
        <div class="sign__element">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" value="<?=$_POST ? $_POST['email'] : '' ?>">
        </div>
        <div class="sign__element">
            <label for="password">PassWord</label>
            <input type="password" name="password" id="password" value="<?=$_POST ? $_POST['password'] : '' ?>">
        </div>
        <div class="sign__element">
            <label for="birthday">Birthday</label>
            <input type="date" name="birthday" id="birthday" value="<?=$_POST ? $_POST['birthday'] : '' ?>">
        </div>
        <div class="sign__element">
            <label for="sex">Sex</label>
            <input type="radio" name="sex" id="sex" class="F" value="F">
            <input type="radio" name="sex" class="M" value="M">
        </div>
        <input type="submit" name="submit" value="done" class="button primary">
    </form>
    <?php if ($errors): ?>
        <div class="errors">
        <?php foreach($errors as $key => $error): ?>
            <p><?= $key ?> :  <?= $error ?></p>
        <?php endforeach ?>
        </div>
    <?php endif ?>
<?php else:?>
    <div class="succes">
        <p>Nice, you are register and log. Thanks !!</p>
    </div>
<?php endif ?>
</div>
<div class="tips">
    <div class="tips__carousel">
        <h1>Tips</h1>
        <div class="tip">
            <h2>it is very easy to build a time machine</h2>
            <p>Just look the sky during the night</p>
            <div class="tip__img">
                <img src="../img/stars.jpg" alt="">
            </div>
        </div>
    </div>
</div>
