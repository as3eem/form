<?php
	$name= $_POST['name'];
	$phone=	$_POST['phone'];
	echo "name:".$name." phone: ".$phone;


	$server="localhost";
	$user="root";
	$password="Contrasena";
	$db="formData";


	$connect = mysqli_connect($server,$user,$password,$db);
	if ($connect->connect_error) {
        die('Error : ('. $connect->connect_errno .') '. $connect->connect_error);
    
    } 
	
	
    

    $stat = $connect->prepare('insert into data(`name`,`phone`) VALUES(?, ?)');

    $stat->bind_param("ss", $name, $phone);

	if($stat->execute())
		{
			echo "hola ".$name;
		}
	

?>