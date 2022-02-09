<?php
		//fixme variable commune page
		$errors = array();
		$bdd = new PDO('mysql:host=localhost;dbname=review_activity;charset=utf8', 'root', 'password');
		date_default_timezone_set('UTC');
		
		require_once '../function/data_graph.php';
		//anchor varaible graph
@$add_data = $_POST['add_data'];
@$select_data= $_POST['view'];

//Link add data back
if (isset($add_data)){
		$date = $_POST['dateAdd'];
		$start = $_POST['hoursStart'];
		$end = $_POST['hoursEnd'];
		$duration = $_POST['durationAdd'];
		$info = $_POST['info'];
		$activity = $_POST['selectAct'];
		$ajoutData = $bdd ->prepare('insert into data_graph set jours=?, debut=?,fin=?,duration=?,duration_num=?,card=?,info=?,ajout=?');
		if($activity == 0){
				$errors['activity']="Select activity";
		}else{
				$activity;
		}
		if(!empty($duration)){
				$duration=$_POST['durationAdd'];
				$dura = date("Hi",strtotime($duration));
				$start= date("H:i");
				$start=$_POST['hoursStart'];
				$end = null;
				$ajoutData->execute([$date,$start,$end,$duration,$dura,$activity,$info,$dayTime]);
		}else{
				$timeStart= strtotime($start);
				$timeEnd = strtotime($end);
				$duration=date("H:i",$timeEnd-$timeStart);
				$dura=date("Hi",$timeEnd-$timeStart);
				$ajoutData->execute([$date,$start,$end,$duration,$dura,$activity,$info,$dayTime]);
		}
}

//link select data
if (isset($select_data)){
		$firstDate=$_POST['dateStart'];
		$lastDate=$_POST['dateEnd'];
		$activity=$_POST['selectAct'];
		if(!empty($firstDate)){
				$startDate = $_POST['dateStart'];
		}else{
				$startDate = $today;
		}
		if(!empty($lastDate)){
				$EndDate = $_POST['dateEnd'];
		}else{
				$EndDate = $today;
		}
		if($activity == 0){
						$reqData = $bdd->query("select * from data_graph inner join cards on cards.id_card=data_graph.card  inner join color on color.id_color=cards.color_id where jours between '$startDate' AND '$EndDate'");
						$reqDataGraph = $bdd->query("select distinct jours from data_graph where jours between '$startDate' AND '$EndDate'");
						$reqData = $bdd->query("select distinct card from data_graph where jours between '$startDate' AND '$EndDate'");
						echo barData();
						echo donutData();
		} else{
				if(!empty($hours)){
						$reqData = $bdd->query("select * from data_graph inner join cards on cards.id_card=data_graph.card  inner join color on color.id_color=cards.color_id where jours between '$startDate' AND '$EndDate' AND card='$activity");
						$reqDataGraph = $bdd->query("select distinct jours from data_graph where jours between '$startDate' AND '$EndDate'");
						$reqData = $bdd->query("select distinct card from data_graph where jours between '$startDate' AND '$EndDate'");
						echo barData();
						echo donutData();
				}
		}
}
