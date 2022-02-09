<!doctype html>
<html lang="fr">
<style>
    <style>
    *{
        background: black;
        color: white;
    }
</style>
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
    session_start();
	require_once  '../function/icon.php';
	require_once  '../function/color.php';
	require_once  '../function/activity.php';
	include_once '../models/activityBack.php';
?>
<body>
<form action="" method="post">
    <input type="text" name="activityName" value="<?php echo $_SESSION['cardName']?>" required>
    <?php
      echo selectIcon();
      echo '<br>';
      echo selectColor();
    ?>
    <input type="submit" name="previewActivity" value="preview">
    <input type="submit" name="addActivity" value="add">
  
    <?php echo previewAct();?>
    <?php echo selectActivity();?>
    <?php echo selectActCart();?>
</form>
</body>
</html>