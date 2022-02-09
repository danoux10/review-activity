<?php
function acvitityToday(){
		global $bdd,$dateTime;
		$reqData = $bdd->query("select * from data_graph inner join cards on cards.id_card=data_graph.card where ajout='$dateTime'");
		$viewAct = "<div>";
			$viewAct .="<div>";
				$viewAct .="<span>";
                                                                                                                                                                                                                                                                         					$viewAct.="<p>Date</p>";
					$viewAct.="<p>Activiter</p>";
					$viewAct.="<p>durée</p>";
					$viewAct.="<p>info</p>";
					$viewAct.="<p>select</p>";
				$viewAct .="</span>";
			$viewAct .="</div>";
			$viewAct .="<div>";
				foreach ($reqData as $data){
						$date = $data['jours'];
						$activity = $data['name_card'];
						$duration = $data['duration'];
						$id_data = $data['id_data_graph'];
						$info = $data['info'];
						$viewAct .="<span>";
						$viewAct .="<p>$date</p>";
						$viewAct .="<p>$activity</p>";
						$viewAct .="<p>$duration</p>";
						$viewAct .="<p>$info</p>";
						$viewAct .="<input type='radio' name='totayData' value='$id_data'>";
						$viewAct .="</span>";
				}
			$viewAct .="</div>";
		$viewAct .= "</div>";
		return $viewAct;
}

function tableData(){
		global $reqData;
		$tableview = "<div>";
		$tableview .= "<div>";
		$tableview .= "<span>";
		$tableview .= "<p>Date</p>";
		$tableview .= "<p>Activiter</p>";
		$tableview .= "<p>Info</p>";
		$tableview .= "<p>Début</p>";
		$tableview .= "<p>Fin</p>";
		$tableview .= "<p>Durée</p>";
		$tableview .= "</spab>";
		$tableview .= "</div>";
		$tableview .= "<div>";
		
		foreach ($reqData as $data){
				$date = $data['jours'];
				$start = $data['jours'];
				$end = $data['jours'];
				$duration = $data['duration'];
				$activity = $data['name_card'];
				$info = $data['info'];
				$tableview .= "<span>";
				$tableview .= "<p>$date</p>";
				$tableview .= "<p>$activity</p>";
				$tableview .= "<p>$info</p>";
				$tableview .= "<p>$start</p>";
				$tableview .= "<p>$end</p>";
				$tableview .= "<p>$duration</p>";
				$tableview .= "</spab>";
		}
		$tableview .= "</div>";
		$tableview .= "</div>";
		return $tableview;
}