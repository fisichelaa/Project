<?php
    $host = "localhost";
    $username = "root";
    $dbname = "mahasiswa";
    $password = "";
    $db = new mysqli($host, $username, $password, $dbname);
    $studentid = $_GET['id'];
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $description = $_POST['desc'];
    $sql = "UPDATE siswa set first_name='".$first_name."',last_name='".$last_name."',description='".$description."' where studentid='".$studentid."'";

    if($db->query($sql) === true){
      header("location: tugas.php");
    }else{
      echo $db->error;
    }
?>
