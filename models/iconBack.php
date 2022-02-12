<?php
		//fixme variable commune page
		$errors = array();
		$bdd = new PDO('mysql:host=localhost;dbname=review_activity;charset=utf8', 'root', 'password');

//anchor variable icon
@$add_icon = $_POST['addIcon'];

//link add icon
if (isset($add_icon)){
		if(isset($_FILES['icon'])){
				if($_FILES['icon']['error'] !== UPLOAD_ERR_OK){
						$errors['icon_download']='erreur de téléchargement';
				}else{
						$name=htmlspecialchars($_POST['iconName']);
						$filename = uniqid();
						$info=pathinfo($_FILES['icon']['name']);
						$src = '../icon/'.$filename.'.'.$info['extension'];
						move_uploaded_file($_FILES['icon']['tmp_name'],'../icon/'.$filename.'.'.$info['extension']);
						$addIcon = $bdd->prepare('insert into icon set tag=?, name_icon=?');
						$addIcon->execute([$src,$name]);
				}
		}
}