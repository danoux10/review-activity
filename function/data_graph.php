<?php
	//fixme a tester
	function barData()
	{
		global $bdd, $reqDataGraph;
		foreach ($reqDataGraph as $value) {
			$jours = $value['jours'];
			$sommation = $bdd->query("select sum(duration_num) as dataSum from data_graph");
			foreach ($sommation as $data) {
				$duration = $data['dataSum'];
				$barData = $bdd->prepare("insert into data_bar set jours=?,duration_total=?");
				$barData->execute([$jours, $duration]);
			}
		}
	}

//fixme a coder
	function donutData(){
		global $bdd, $reqDataGraph, $reqData;
		$card = array();
		foreach ($reqData as $dataCard) {
			$card[]=$dataCard['card'];
		}
		//anchor select data and add for pie
		foreach ($reqDataGraph as $dataDay){
			$jours = $dataDay['jours'];
			foreach ($card as $data){
				$sommation = $bdd->query("select sum(duration_num) as dura from data_graph where jours= '$jours' and card = '$data'");
				foreach ($sommation as $dataGraph){
					$somme = $dataGraph['dura'];
					if ($somme!=null){
						$pieData = $bdd->prepare("insert into data_pie set jours=?,card_id=?,duration_totam=?");
						$pieData->execute([$jours,$data,$somme]);
					}
				}
			}
		}
	}