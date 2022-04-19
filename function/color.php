<?php
		@$colorSelect = $_SESSION['selectColor'];
  @$colorSlct = $_SESSION['colorActSel'];
		function preview(){
	global $back,$fill,$border,$color;
	//link preview
	$preview_block = "<div style='background: $back'class='colorPreviewBody'>";
	$preview_block .="	<div style='background:$fill ;border:3px solid $border' class='colorPreviewInside'>";
	$preview_block .="<h3 style='color: $color' class='colorPreviewText'>text</h3>";
	$preview_block .="</div>";
	$preview_block .="</div>";
	return $preview_block;
}

function selectColor(){
		global $bdd,$colorSelect;
		$reqData = $bdd->query("select * from color");
		//link select color
		$selecColor = "<div class='color_containt scroll'>";
		foreach ($reqData as $data){
				$back = $data['back'];
				$fill = $data['fill'];
				$border = $data['border'];
				$color = $data['color_name'];
				$idColor = $data['id_color'];
				if ($colorSelect == $idColor){
     $selecColor .="<span class='container' style='background: $back'>";
     $selecColor .= "<input type='radio' name='selectColor' value='$idColor' checked id='$idColor'/>";
     $selecColor .= "<label for='$idColor' style='background: $fill;border:3px solid $border'>";
     $selecColor .= "<p style='color: $color'>Text</p>";
     $selecColor .= "</label>";
     $selecColor .="<span class='infoColor'>";
     $selecColor .="<div>";
     $selecColor .="<p>back</p>";
     $selecColor .="<p>$back</p>";
     $selecColor .="</div>";
     $selecColor .="<div>";
     $selecColor .="<p>fill</p>";
     $selecColor .="<p>$fill</p>";
     $selecColor .="</div>";
     $selecColor .="<div>";
     $selecColor .="<p>border</p>";
     $selecColor .="<p>$border</p>";
     $selecColor .="</div>";
     $selecColor .="<div>";
     $selecColor .="<p>color</p>";
     $selecColor .="<p>$color</p>";
     $selecColor .="</div>";
     
     $selecColor .="</span>";
     $selecColor .="</span>";
     
    }else {
     $selecColor .="<span class='container' style='background: $back'>";
     $selecColor .= "<input type='radio' name='selectColor' value='$idColor' id='$idColor'/>";
						$selecColor .= "<label for='$idColor' style='background: $fill;border:3px solid $border'>";
						$selecColor .= "<p style='color: $color'>Text</p>";
						$selecColor .= "</label>";
      $selecColor .="<span class='infoColor'>";
      $selecColor .="<div>";
      $selecColor .="<p>back</p>";
      $selecColor .="<p>$back</p>";
      $selecColor .="</div>";
      $selecColor .="<div>";
      $selecColor .="<p>fill</p>";
      $selecColor .="<p>$fill</p>";
      $selecColor .="</div>";
      $selecColor .="<div>";
      $selecColor .="<p>border</p>";
      $selecColor .="<p>$border</p>";
      $selecColor .="</div>";
      $selecColor .="<div>";
      $selecColor .="<p>color</p>";
      $selecColor .="<p>$color</p>";
      $selecColor .="</div>";
 
      $selecColor .="</span>";
     $selecColor .="</span>";
     
    }
		}
		$selecColor .= "</div>";
		return $selecColor;
}

function colorActivity(){
 global $bdd,$colorSlct;
 $reqData = $bdd->query("select * from color");
 
 //link select color
 $selecColor = "<div class='color_containt scroll'>";
 foreach ($reqData as $data){
  $back = $data['back'];
  $fill = $data['fill'];
  $border = $data['border'];
  $color = $data['color_name'];
  $idColor = $data['id_color'];
  $valueColor = 'color'.$idColor;
  if ($colorSlct == $idColor){
   $selecColor .="<span class='container'>";
   $selecColor .= "<input type='radio' name='selectColor' value='$idColor' checked id='$valueColor'/>";
   $selecColor .= "<label for='$valueColor' style='background: $fill;border:3px solid $border'>";
   $selecColor .= "<p style='color: $color'>Text</p>";
   $selecColor .= "</label>";
   $selecColor .="</span>";
  }else {
   $selecColor .="<span class='container'>";
   $selecColor .= "<input type='radio' name='selectColor' value='$idColor' id='$valueColor'/>";
   $selecColor .= "<label for='$valueColor' style='background: $fill;border:3px solid $border'>";
   $selecColor .= "<p style='color: $color'>Text</p>";
   $selecColor .= "</label>";
   $selecColor .="</span>";
  }
 }
 $selecColor .= "</div>";
 return $selecColor;
}