<?php
$dbh = new PDO("mysql:host=localhost;dbname=form-login","root","");
$sql = "INSERT INTO login(first_name,last_name) VALUES (:first_name,:last_name)";
$addMembersQuery = $dbh->prepare($sql);
$addMembersQuery->bindParam(":first_name",$_POST["first_name"],PDO::PARAM_STR);
$addMembersQuery->bindParam(":last_name",$_POST["last_name"],PDO::PARAM_STR);
$addMembersQuery->execute();
?>