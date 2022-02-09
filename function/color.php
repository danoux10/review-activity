<?php
		@$colorSelect = $_SESSION['selectColor'];
		
		function preview(){
	global $back,$fill,$border,$color;
	//link preview
	$preview_block = "<div style='background: $back'>";
	$preview_block .="	<div style='background:$fill ;border:3px solid $border'>";
	$preview_block .="<h3 style='color: $color'>text</h3>";
	$preview_block .="</div>";
	$preview_block .="</div>";
	return $preview_block;
}

function selectColor(){
		global $bdd,$colorSelect;
		$reqData = $bdd->query("select * from color");
		//link select color
		$selecColor = "<div>";
		foreach ($reqData as $data){
				$back = $data['back'];
				$fill = $data['fill'];
				$border = $data['border'];
				$color = $data['color_name'];
				$idColor = $data['id_color'];
				if ($colorSelect == $idColor){
						$selecColor .= "<input type='radio' name='selectColor' value='$idColor' checked id='$idColor'/>";
						$selecColor .= "<label for='$idColor' style='background: $fill;border:3px solid $border'>";
//						$selecColor .= "<p style='color: $color'>Text</p>";
						$selecColor .="<p>$idColor</p>";
						$selecColor .= "</label>";
				}else {
						$selecColor .= "<input type='radio' name='selectColor' value='$idColor' id='$idColor'/>";
						$selecColor .= "<label for='$idColor' style='background: $fill;border:3px solid $border'>";
//						$selecColor .= "<p style='color: $color'>Text</p>";
						$selecColor .="<p>$idColor</p>";
						$selecColor .= "</label>";
				}
		}
		$selecColor .= "</div>";
		return $selecColor;
}
