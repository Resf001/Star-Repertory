<?php

session_start();

use App\PDO\LogPDO;
use App\verify\VerifyPost;

$pageTitle = "Log In";
$pageDescrition = "Description";

if (!empty($_POST['buttonLogOut'])){
    unset($_SESSION['user'], $_POST['buttonLogOut']);
}

$errors = [];

if (!empty($_POST)){
    if (empty($errors = VerifyPost::verifyLog($_POST, $pdo))){
        if($user = VerifyPost::userExist($_POST, $pdo)){
            if(VerifyPost::passwordVerify($_POST['password'], $user->password)){
                LogPDO::logIn($user->id, $user->status, $user->name);
                unset($_POST);
            } else {
                $errors['password'] = "Hmmm, no badly password";
            }
        } else {
            $errors['email'] = "No, this mail doens't exist"; 
        }
    }
}
?>
<div class="sign">
    <?php if (empty($_SESSION['user'])): ?>
        <h1>Log In</h1>
        <form action="" method="post" class="sign__form">
            <div class="sign__element">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" value="<?=$_POST ? $_POST['email'] : '' ?>">
            </div>
            <div class="sign__element">
                <label for="password">PassWord</label>
                <input type="password" name="password" id="password" value="<?=$_POST ? $_POST['password'] : '' ?>">
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
    <?php else: ?>
        <div class="succes">
            <p>You are already connect</p>
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
