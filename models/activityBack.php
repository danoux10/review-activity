<?php
		//anchor varaible activity
		@$preview_actvity = $_POST['previewActivity'];
		@$add_actvity = $_POST['addActivity'];
		
		//link preview activity
		if (isset($preview_actvity)){
				$name = htmlspecialchars($_POST['activityName']);
				@$select_color = $_POST['selectColor'];
				@$select_icon = $_POST['selectIcon'];
				if($select_color == null){
						$errors['select_color']="choisir un thème";
				}else{
						$color = $_POST['selectColor'];
      $_SESSION['colorActSel'] = $color;
				}
				if($select_icon == null){
						$errors['select_color']="choisir un icon";
				}else{
						$icon = $_POST['selectIcon'];
     $_SESSION['selectIcon'] = $icon;
				}
		}
  
		//link add activity
		if (isset($add_actvity)){
				$name_activity = htmlspecialchars($_POST['activityName']);
				@$select_color = $_POST['selectColor'];
				@$select_icon = $_POST['selectIcon'];
				if($select_color == null){
						$errors['select_color']="choisir un thème";
				}else{
						$select_color = $_POST['selectColor'];
				}
				if($select_icon == null){
						$errors['select_color']="choisir un icon";
				}else{
						$select_icon = $_POST['selectIcon'];
				}
				$_SESSION['selectColor']=$select_color;
				$_SESSION['selectIcon']=$select_icon;
				$_SESSION['cardName']= $name_activity;
    $actived = 1;
				$activity = $bdd->prepare('insert into cards set icon_id=?, color_id=?, name_card=?, actived=?');
				$activity ->execute([$select_icon,$select_color,$name_activity,$actived]);
		}
