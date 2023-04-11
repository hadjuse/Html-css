<?php
$data = ["u1"=>"m1","u2"=>"m2","u3"=>"m3","u4"=>"m4","u5"=>"m5"];
$mdp=$_POST["password"];
$user=$_POST["username"];

if ($data[$user]==$mdp){
	echo "Bienvenue " . $user;
} else {
	header ("location:login.html");
}
?>
