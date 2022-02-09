<?php
		//fixme varibale commune page
		$bdd = new PDO('mysql:host=localhost;dbname=review_activity;charset=utf8', 'root', 'password');

//anchor declatation variable color
@$add_color = $_POST['addColor'];
@$preview_color = $_POST['preview'];

//anchor defaut value
		$_SESSION['back'] = '#ff0000';
		$_SESSION['fill'] = '#00ff00';
		$_SESSION['border'] = '#00ffff';
		$_SESSION['color'] = '#ff00ff';
		
		$actBack ='on';
		$actFill ='on';
		$actBorder ='on';
		//link add color
if (isset($add_color)){
		@$color = $_POST['textColor'];
		@$actBack = $_POST['activeBack'];
		@$actFill = $_POST['activeFill'];
		@$actBorder = $_POST['activeBorder'];
		//anchor check for back preview
		if ($actBack=='on'){
				@$back = $_POST['back'];
		}else{
				$back = null;
		}
		//anchor check for fill preview
		if ($actFill=='on'){
				@$fill = $_POST['fill'];
		}else{
				$fill = null;
		}
		//anchor check for border preview
		if ($actBorder=='on'){
				@$border = $_POST['border'];
		}else{
				$border = null;
		}
		//set session for keep value
		$_SESSION['color'] = $color;
		$_SESSION['back']=$back;
		$_SESSION['fill']=$fill;
		$_SESSION['border']=$border;
		//
		//anchor add color on bdd
		$addColor= $bdd->prepare('insert into color set back=?, fill=?, border=?, color_name=?');
		$addColor->execute([$back,$fill,$border,$color]);
}

//link preview color
if (isset($preview_color)){
		@$color = $_POST['textColor'];
		@$actBack = $_POST['activeBack'];
		@$actFill = $_POST['activeFill'];
		@$actBorder = $_POST['activeBorder'];
		//anchor check for back preview
		if ($actBack=='on'){
				$back = $_POST['back'];
		}else{
				$back = null;
		}
		//anchor check for fill preview
		if ($actFill=='on'){
				$fill = $_POST['fill'];
		}else{
				$fill = null;
		}
		//anchor check for border preview
		if ($actBorder=='on'){
				$border = $_POST['border'];
		}else{
				$border = null;
		}
		//set session for keep value
		@$_SESSION['color'] =$color;
		@$_SESSION['back']=$back;
		@$_SESSION['fill']=$fill;
		@$_SESSION['border']=$border;
}
