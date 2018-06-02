<?php

    $host = "localhost";
        $username = "root";
        $dbname = "mahasiswa";
        $password = "";
        if(isset($_GET['id'])){
          $id = $_GET['id'];
          $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
          $panggil = "select * from siswa where studentid = '".$id."';";
          $apakek = $db->query($panggil);
          foreach ($apakek as $row){
            $formid = $row['studentid'];
            $formfname = $row['first_name'];
            $formlname = $row['last_name'];
            $formdesc = $row['description'];
          }
        }        
?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
	<title></title>
    <script>
        $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
</head>
<body>

<header>
<nav class="navbar navbar-default">
 <div class="container-fluid">
 <div class= "navbar-header">
 <a class="navbar-brand" href="#"> [IF635]Web Programming </a>
 </div>
 <div>
 <ul class="nav navbar-nav navbar-right">
 <li class="active" ><a href="#"> Student</a></li>
 </ul>
 </div>
 </div>
</nav>
</header>


<body>
<div class="container">
  <form action="<?php if(isset($_GET['id'])){ echo "edit.php?id=".$formid;} else{echo "action_page.php";} ?> " method="post">
    <div class="form-group">
      <label for="studentid">Student ID</label>
      <input type="studentid" class="form-control" id="studentid"" placeholder="Student ID" name="studentid"  <?php if(isset($_GET['id'])){ echo "value='".$formid."' disabled";
              }
        ?>
        >
    </div>
    <div class="form-group">
      <label for="name">First Name</label>
      <input type="name" class="form-control" id="name" placeholder="FIrst Name" name="name" <?php if(isset($_GET['id'])){ echo "value='".$formfname."'";
              }
        ?>
      >
    </div>
        <div class="form-group">
      <label for="lname">Last Name</label>
      <input type="lname" class="form-control" id="lname" placeholder="Last Name" name="lname"  <?php if(isset($_GET['id'])){ echo "value='".$formlname."'";
              }
        ?>
      >
    </div>
      <div class="form-group">
      <label for="desc">Description</label>
      <textarea type="text" class="form-control"  rows="5" placeholder="Description" name="desc"><?php if(isset($_GET['id'])){echo "$formdesc";}?></textarea>
    </div>
    <?php if(isset($_GET['id'])){ ?>
    <button type="submit" class="btn btn-primary">Update</button>
    <?php }else{?>
    <button type="submit" class="btn btn-primary">Submit</button>
    <?php }?>
    <button type="cancel" class="btn btn-default">Cancel</button>
</div>

  </form>
</div>
</body>