<?php
	$name= $_POST['name'];
	$phone=	$_POST['phone'];
	$email= $_POST['email'];
	//=========================================
	$server="localhost";
	$user="root";
	$password="Contrasena";
	$db="formData";
	date_default_timezone_set("Asia/Calcutta");
	echo "Hola! ".$name." it's ".date("d/m/Y H:i:s");

	//=========================================
	$connect = mysqli_connect($server,$user,$password,$db);
	if ($connect->connect_error) {
        die('Error : ('. $connect->connect_errno .') '. $connect->connect_error);
    } 
    //==========================================
    $stat = $connect->prepare('insert into data(`name`,`phone`) VALUES(?, ?)');
    
    $stat->bind_param("ss", $name, $phone);

	if($stat->execute())
		{
			echo "<script>alert('executed')</script>";


		}
	

?>