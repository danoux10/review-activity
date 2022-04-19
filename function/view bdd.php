<?php
//include_once '../config/bdd.php';
$bdd = new PDO('mysql:host=localhost;dbname=review_activity;charset=utf8', 'root', 'password');
$reqData = $bdd->query('select * from icon');

foreach ($reqData as $data){
 $id = $data['id_icon'];
 $name = $data['name_icon'];
 $tag = $data['tag'];
 echo $id;
}
