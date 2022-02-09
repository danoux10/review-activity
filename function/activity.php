<?php
		@$iconSelect = $_SESSION['selectIcon'];
		@$colorSelect = $_SESSION['selectColor'];
		@$name_activity=$_SESSION['cardName'];
		
		@$activity_select = $_SESSION['activitySelect'];
		
		function selectActivity(){
				global $bdd, $activity_select;
				$reqData = $bdd->query("select * from cards where actived=1 ");
				$select_Activity = "<select name='selectAct'>";
				$select_Activity .= "<option value='0'>Activity</option>";
				foreach ($reqData as $data){
						//set variable
						$idActivity = $data['id_card'];
						$nameActivity = $data['name_card'];
						if ($activity_select==$idActivity){
								$select_Activity .= "<option value='$idActivity' selected>$nameActivity</option>";
						}else{
								$select_Activity .= "<option value='$idActivity'>$nameActivity</option>";
						}
				}
				$select_Activity .= "</select>";
				return $select_Activity;
		}
		
		function selectActCart(){
				global $bdd,$activity_select;
				$reqData = $bdd->query("select * from cards inner join color on cards.color_id = color.id_color inner JOIN icon on cards.icon_id = icon.id_icon");
				$selectCard = "<div>";
				foreach ($reqData as $data){
						//set variable
						$id_card = $data['id_card'];
						$fill = $data['fill'];
						$border = $data['border'];
						$color = $data['color_name'];
						$name = $data['name_card'];
						$icon = $data['tag'];
						if($activity_select==$id_card){
								$selectCard .= "<input type='radio' class='' checked name='activity' value='$id_card' id='$id_card' />";
								$selectCard .= "<div class=''>";
								$selectCard .= "<label for='activityid' class='' style='background: $fill;color : $color; border: 3px solid $border'>";
								$selectCard .= "<img class='' src='$icon' alt='$name'/>";
								$selectCard .= "<p class='card-title'>".$name."</p>";
								$selectCard .= "</label>";
								$selectCard .= "</div>";
						}else{
								$selectCard .= "<input type='radio' class='' name='activity' value='$id_card' id='$id_card' />";
								$selectCard .= "<div class=''>";
								$selectCard .= "<label for='activityid' class='' style='background: $fill;color : $color; border: 3px solid $border'>";
								$selectCard .= "<img class='' src='$icon' alt='$name'/>";
								$selectCard .= "<p class='card-title'>".$name."</p>";
								$selectCard .= "</label>";
								$selectCard .= "</div>";
						}
				}
				$selectCard .="</div>";
				return $selectCard;
		}
		
		function previewAct(){
			global $bdd,$iconSelect, $colorSelect,$name_activity;
				$reqIcon = $bdd->query("select * from icon where id_icon=$iconSelect");
				$reqColor = $bdd->query("select * from color where id_color=$colorSelect");
				//icon
				foreach ($reqIcon as $dataIcon){
						$icon = $dataIcon['tag'];
				}
				//color
				foreach ($reqColor as $dataColor){
						$fill = $dataColor['fill'];
						$border = $dataColor['border'];
						$color = $dataColor['color_name'];
				}
				$preview_block ="	<div style='background:$fill ;border:3px solid $border'>";
				$preview_block .="	<img src='$icon'>";
				$preview_block .="<h3 style='color: $color'>$name_activity</h3>";
				$preview_block .="</div>";
				return $preview_block;
		}