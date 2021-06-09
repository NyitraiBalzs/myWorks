<!-- database connection -->

<?php 
$db_host="localhost";
$db_name="nyitrai";
$db_user="root";
$db_password="";

$conn="mysql:host=$db_host;dbname=$db_name";
try{
	$db_conn=new PDO($conn,$db_user,$db_password);
	$db_conn->query("SET NAMES UTF8");
}catch(Exception $e){
	print "<h5>Nem sikerült a kapcsolat!</h5>".$e->getMessage();
}

?>