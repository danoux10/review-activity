<style>
    * {
        background: #000;
        color: white;
    }

    td {
        border: 1px solid white;
        text-align: center;
        padding: 1.5%;
    }
</style>
<?php
	$bdd = new PDO('mysql:host=localhost;dbname=activity;charset=utf8', 'root', 'password');
	$base = new PDO('mysql:host=localhost;dbname=review_activity;charset=utf8', 'root', 'password');
	$startDate = '2021-12-22';
	$EndDate = '2022-01-02';
	$card = array();
    var_dump($card); echo '<br>';
	$reqDataGraph = $bdd->query("select distinct jours from data_graph where jours between '$startDate' AND '$EndDate'");
	$reqGraph = $bdd->query("select distinct card from data_graph where jours between '$startDate' AND '$EndDate'");
    foreach ($reqGraph as $value){
        $card[] = $value['card'];
    }
	var_dump($card); echo '<br>';
	foreach ($reqDataGraph as $value) {
		$jours = $value['jours'];
		foreach ($card as $val) {
			$cards = $val;
			$sommation = $bdd->query("select sum(durationNum) as dura from data_graph where jours= '$jours' and card = '$cards'");
			foreach ($sommation as $data) {
				$somme = $data['dura'];
                if($somme != null){
                    //fixme insert into query
	                echo date("d/m/Y", strtotime($jours)) . '-/-' . $cards . '-/-' . $somme . '<br>';
                }
			}
		}
	}
	$viewVal = $base->query('select * from valeur');
	$val = "<table>";
	$val .= "<tr>";
	$val .= "<td>id</td>";
	$val .= "<td>valeur</td>";
	$val .= "<td>other</td>";
	$val .= "<tr>";
	foreach ($viewVal as $data) {
		$id = $data['id'];
		$valeur = $data['val'];
		$other = $data['other'];
		$val .= "<tr>";
		$val .= "<td>$id</td>";
		$val .= "<td>$valeur</td>";
		$val .= "<td>$other</td>";
		$val .= "<tr>";
	}
	$val .= "</table>";
	echo $val;
	$init = 0;
	$fist = array(1, 2, 3, 5);
	$second = array(5, 6, 7, 8, 9);
	//		var_dump($fist);		echo "<br>";		var_dump($second);echo "<br>";
	$test = "<table>";
	$test .= "<tr>";
	$test .= "<td>valeur</td>";
	$test .= "<td>oth</td>";
	$test .= "<tr>";
	foreach ($fist as $data) {
		foreach ($second as $item) {
			$reqData = $base->query("select sum(id) as somme from valeur where other ='$data' and val='$item'");
			$reqData2 = $base->query("select other from valeur where other ='$data' and val='$item'");
			foreach ($reqData2 as $cafe) {
				$oth = $cafe['other'];
				foreach ($reqData as $value) {
					$vip = $value['somme'];
					if ($vip != null) {
						$test .= "<tr>";
						$test .= "<td>$vip</td>";
						$test .= "<td>$oth</td>";
						$test .= "<tr>";
					}
				}
			}
		}
	}
	$test .= "</table>";
	echo $test;