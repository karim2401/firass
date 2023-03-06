<?php
mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("firass")or die(mysql_error());
$id=$_POST["id"];
$n=$_POST["nom"];
$p=$_POST["pre"];
$mot=$_POST["mdp"];
$date=$_POST["dt"];
$req="insert into client values('$id','$n','$p','$mot','$date');";
mysql_query($req);
?>