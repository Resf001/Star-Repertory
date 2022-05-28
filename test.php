<?php 
 dump($_FILES['image']);
 dump($_SESSION['user']);
 if($_POST['send']){
     $query = $pdo->prepare('INSERT INTO stars VALUES(NULL, :user_id, :name, :text, :image, :created_date, :tags, :posted)');
     $query->execute($params = [
         'user_id' => $_SESSION['user']['id'],
         'name' => "test",
         'text' => "test test",
         'image' => file_get_contents($_FILES['image']["tmp_name"]),
         'created_date' => "1970-01-01 00:00:00",
         'tags' => "2|3",
         'posted' => 1
     ]);
 }

 $query = $pdo->prepare('SELECT image FROM stars WHERE id = 2');
 $query->execute();
 $tab=$query->fetch();

 echo '<img src="data:image/jpeg;base64,'.base64_encode( $tab->image ).'"/>';


?>