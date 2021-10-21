
<?php 
try{
    $connect = new PDO("mysql:host=localhost;dbname=form", 'root','');
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo 'success'; 
}catch(PDOException $e){
    echo $e;
}
?>
