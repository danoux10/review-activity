<html lang="en">
<head>
<?php
// fixme penser a supprimer
 ini_set("display_errors", "1");
 error_reporting(E_ALL);
//
	include_once '../config/bdd.php';
    require_once '../function/activity.php';
    require_once '../function/color.php';
    require_once '../function/icon.php';
    require_once '../function/data_graph.php';
    require_once '../function/data.php';
    $errors = array();
?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../css/style.css">
    <title><?php echo $_SESSION['page'] ?></title>
</head>
<body class="scroll">
<?php include_once '../controller/navbar.php'?>