<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
    session_start();
    require_once  '../function/icon.php';
    include_once '../models/iconBack.php';
?>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="icon" accept=".svg" required>
    <input type="text" name="iconName">
    <input type="submit" name="valid">
</form>
<?php echo selectIcon();?>
</body>
</html>