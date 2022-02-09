<?php
		@$iconSelect = $_SESSION['selectIcon'];
		
function selectIcon(){
		global $bdd,$iconSelect;
		$reqData = $bdd->query("select * from icon");
		//link select color
		$selecIcon = "<div>";
		foreach ($reqData as $data){
				$tag = $data['tag'];
				$name = $data['name_icon'];
				$idIcon = $data['id_icon'];
				if($idIcon==$iconSelect){
						$selecIcon .="<input type='radio' name='selectIcon' checked value='$idIcon' id='$idIcon'/>";
						$selecIcon .="<label for='$idIcon'>";
//						$selecIcon .="<img src='$tag' alt='$name'>";
						$selecIcon .="<p>$idIcon</p>";
						$selecIcon .="</label>";
				}else{
						$selecIcon .="<input type='radio' name='selectIcon' value='$idIcon' id='$idIcon'/>";
						$selecIcon .="<label for='$idIcon'>";
//						$selecIcon .="<img src='$tag' alt='$name'>";
						$selecIcon .="<p>$idIcon</p>";
						$selecIcon .="</label>";
				}
		}
		$selecIcon .= "</div>";
		return $selecIcon;
}