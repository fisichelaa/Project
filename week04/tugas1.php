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
<div class="col-md-10 col-md-offset-1">
<div align="right">
<a href="#" class="btn btn-info" style="margin-bottom:10px">
  <span class="glyphicon glyphicon-plus-sign"></span> Submit 
</a>
</div>


<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>

<th> # </th>
<th> Student ID </th>
<th> First Name</th>
<th> Last Name </th>
</tr>
</thead>
<tbody>
<tr>
    <td> 1 </td>
    <td> 00000010680 </td>
    <td> Fisichela</td>
    <td> Thioanda</td>
</tr>

<tr>
    <td> 2 </td>
    <td> 00000011195 </td>
    <td> Andreas</td>
    <td> Hartanto </td>
</tr>

<tr>
 <td> 3 </td>
    <td> 00000011288 </td>
    <td> Vanessa </td>
    <td> Wijaya </td>
</tr>
</tbody>
</table>
        </tbody>
    </table>
</div>
</body>
</html>