<?php
 @$iconSelect = $_SESSION['selectIcon'];
 
 function selectIcon()
 {
  global $bdd, $iconSelect;
  $reqData = $bdd->query("select * from icon");
  //link select color
  $selecIcon = "<div id='iconContent' class='scroll'>";
  foreach ($reqData as $data) {
   $tag = $data['tag'];
   $name = $data['name_icon'];
   $idIcon = $data['id_icon'];
   if ($idIcon == $iconSelect) {
    $selecIcon .= "<span>";
    $selecIcon .= "<input type='radio' name='selectIcon' checked value='$idIcon' id='$idIcon'/>";
    $selecIcon .= "<label for='$idIcon'>";
    $selecIcon .= "<img src='$tag' alt='$name' class='iconView'>";
    $selecIcon .= "</label>";
    $selecIcon .= "</span>";
   } else {
    $selecIcon .= "<span>";
    $selecIcon .= "<input type='radio' name='selectIcon' value='$idIcon' id='$idIcon'/>";
    $selecIcon .= "<label for='$idIcon'>";
    $selecIcon .= "<img src='$tag' alt='$name' class='iconView'>";
    $selecIcon .= "</label>";
    $selecIcon .= "</span>";
   }
  }
  $selecIcon .= "</div>";
  return $selecIcon;
 }
 