<style>
    *{
        background: #000;
        color: white;
    }
</style>
<?php
 include_once '../config/bdd.php';
 $minIcon = $bdd->query('select min(id_color)as minColor from color');
 
 foreach ($minIcon as $data){
     $minI = $data['minColor'];
 }
 echo $minI;
 