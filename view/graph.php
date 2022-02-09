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
		$today = date("Y-m-d");
		$years = substr($today, 0, 4);
		$month = substr($today, 5, 2);
		$day = substr($today, 8, 2);
		$dayTime = mktime(0, 0, 0, $month, $day, $years);
		
		require_once '../function/activity.php';
        require_once '../function/data.php';
	include_once '../models/graphBack.php';
?>
<body>
<!--Link add data-->
<form action="" method="post">
    <div>
        <label for="">date</label>
        <input type="date" name="dateAdd">
    </div>
    <div>
        <label for="">Hours Start</label>
        <input type="time" name="hoursStart">
    </div>
    <div>
        <label for="">Hours End</label>
        <input type="time" name="hoursEnd">
    </div>
    <div>
        <label for="">Duration</label>
        <input type="time" name="durationAdd">
    </div>
    <div>
        <label for="">info</label>
        <input type="text" name="info">
    </div>
    <div>
      <?php echo selectActivity(); ?>
    </div>
    <input type="submit" name="add_data">
</form>
<?php
//    echo acvitityToday();
?>
<!--link view data-->
<form action="" method="post">
    <div>
        <label for="">date Start</label>
        <input type="date" name="dateStart">
    </div>
    <div>
        <label for="">date end</label>
        <input type="date" name="dateEnd">
    </div>
    <div>
      <?php echo selectActivity(); ?>
    </div>
    <input type="submit" name="view">
</form>
</body>
</html>