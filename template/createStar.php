<?php 

$parsedown = new Parsedown();
$parsedown->setSafeMode(True);

?>

<div class="sign full">
    <h1>Stars</h1>
    <form action="" method="post" class="sign__form" enctype="multipart/form-data" >
        <div class="sign__element">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="<?= $_POST ? $_POST['title'] : '' ?>">
        </div>
        <div class="sign__element">
            <label for="image">image</label>
            <input type="file" name="image" id="image">
        </div>
        <div class="sign__element">
            <label for="tags">Tags</label>
            <select name="tags" id="tags">
                <option value="planète">Planète</option>
            </select>
        </div>
        <div class="sign__element">
            <label for="text">Text (use <a href="https://markdown-it.github.io" target="_blank">markdown</a>)</label>
            <textarea name="text" id="text"></textarea>
        </div>
        <input type="submit" name="submit" value="done" class="button primary">
        <input type="submit" name="preview" value="preview" class="button primary">
    </form>
</div>
<?php if (isset($_POST['preview'])):?>
<h1><?= $_POST['title'] ?></h1>
<?= '<img src="data:image/jpeg;base64,'.base64_encode( file_get_contents($_FILES['image']['tmp_name']) ).'"/>' ?>
<ul>
    <li><?= $_POST['tags'] ?></li>
</ul>
<p>
    <?= $parsedown->text($_POST['text']) ?>
</p>
<?php endif ?>