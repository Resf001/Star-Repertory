<?php 
$pageTitle = "Sign in";
$pageDescrition = "Description";
$sign = false;
if (!empty($_POST)){
    $sign = true;
}
?>
<div class="sign">
<?php if ($sign == false): ?>
    <h1>Sign-In</h1>
    <form action="" method="post" class="sign__form">
        <div class="sign__element">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="sign__element">
            <label for="firstname">FirstName</label>
            <input type="text" name="firstname" id="firstname">
        </div>
        <div class="sign__element">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email">
        </div>
        <div class="sign__element">
            <label for="password">PassWord</label>
            <input type="password" name="password" id="password">
        </div>
        <div class="sign__element">
            <label for="birthday">Birthday</label>
            <input type="date" name="birthday" id="birthday">
        </div>
        <div class="sign__element">
            <label for="sex">Sex</label>
            <input type="radio" name="sex" id="sex" class="F" value="F">
            <input type="radio" name="sex" class="M" value="M">
        </div>
        <input type="submit" name="submit" value="done" class="button primary">
    </form>
<?php elseif ($sign == true) :?>
    <div class="succes">
        <p>Nice, you are register. Thanks !!</p>
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

