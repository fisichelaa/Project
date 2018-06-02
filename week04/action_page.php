<?php
	$host = "localhost";
    $username = "root";
    $dbname = "mahasiswa";
    $password = "";
    $db = new mysqli($host, $username, $password, $dbname);
	$studentid = $_POST['id'];
	$first_name = $_POST['fname'];
	$last_name = $_POST['lname'];
	$description = $_POST['desc'];
	$sql = "INSERT INTO siswa values('"."$studentid"."','"."$first_name"."','"."$last_name"."','"."$description"."');";

	if($db->query($sql) === true){
	  header("location: tugas.php");
	}else{
	  echo $db->error;
	}
?>