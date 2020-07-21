<?php
@ob_start();
session_start();
if(isset($_SESSION['session_name']))
{
?>
<html>
<head>
	<title>Admin Panel</title>
	   <link rel="icon" href="fiblogo.png" type="image/png">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link rel="stylesheet" type="text/css" href="hey.css">
    <script type="text/javascript" src="heyy.js"></script>
</head>
<body>
<header>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="fiblogo.png" width="50px" height="50px" style="margin-top: -15px;"></a>
    </div>
          <a href="#" style="font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;font-size: 30px;margin-left: 10px;">Fight It Back</a>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="#"> <i><span class="glyphicon glyphicon-tasks" style="color: white;font-size: 15px;"></span></i> Admin </a></li>
      <li><a href="info.php"><i><span class="glyphicon glyphicon-info-sign" style="color: white;font-size: 15px;"></span></i> Messages <span class="badge badge-light">
        <?php
        $connection=mysqli_connect('localhost','root','');
        mysqli_select_db($connection,'fib');
        $query=mysqli_query($connection,"SELECT message FROM contact WHERE status='not read'");
        echo mysqli_num_rows($query);
        ?>
      </span></a></li>
        <li><a href="adminsession.php"> <i><span class="glyphicon glyphicon-off" style="color: white;font-size: 15px;"></span></i> Sign Out</a></li>
    </ul>
  </div>
</nav>
</header>
<br><br><br><br>

	<h1 style="color: black;text-align: center;">ALL COMPLAINTS</h1>
	<br>
<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'fib');
$query=mysqli_query($con,"select * from complaints");
echo "<table border=5 style=border-color:blue;margin-left:10px;>";
echo "<th style=background-color:black;padding:10px;color:white;>"."User's Email"."</th>";
echo "<th style=background-color:black;padding:10px;color:white;>"."User's Name"."</th>";
echo "<th style=background-color:black;padding:10px;color:white;>"."Contact No."."</th>";
echo "<th style=background-color:black;padding:10px;color:white;>"."Complaint"."</th>";
echo "<th style=background-color:black;padding:10px;color:white;>"."Complaint No."."</th>";
echo "<th style=background-color:black;padding:10px;color:white;>"."Place"."</th>";
echo "<th style=background-color:black;padding:10px;color:white;>"."Type"."</th>";
echo "<th style=background-color:black;padding:10px;color:white;>"."Address"."</th>";
echo "<th style=background-color:black;padding:10px;color:white;>"."Image"."</th>";
echo "<th style=background-color:black;padding:10px;color:white;>"."Change Status"."</th>";
while ($result=mysqli_fetch_array($query)) {
	echo "<tr>";
	echo "<td style=width:170px;height:200px;background-color:black;padding:10px;color:white;>";
	echo $result['email'];
	echo "</td>";
  echo "<td style=width:150px;height:200px;background-color:black;padding:15px;color:white;>";
  echo $result['fname']." ".$result['lname'];
  echo "</td>";
  echo "<td style=width:120px;height:200px;background-color:black;padding:15px;color:white;>";
  echo $result['mobile'];
  echo "</td>";
  echo "<td style=width:200px;height:200px;background-color:black;padding-left:10px;color:white;>";
  echo $result['complaint'];
  echo "</td>";
    echo "<td style=width:50px;height:200px;background-color:black;padding:10px;color:white;>";
  echo "C00A".$result['complaintnumber'];
  echo "</td>";
  echo "<td style=width:70px;height:200px;background-color:black;padding:10px;color:white;>";
  echo $result['place'];
  echo "</td>";
   echo "<td style=width:70px;height:200px;background-color:black;padding:10px;color:white;>";
  echo $result['type'];
  echo "</td>";
   echo "<td style=width:70px;height:200px;background-color:black;padding:10px;color:white;>";
  echo $result['address'];
  echo "</td>";
   echo "<td style=width:70px;height:200px;background-color:black;padding:10px;color:white;>";
   ?>
   <img src=<?php echo $result['picture']; ?> width="200px" height="200px" >
  <?php
  echo "</td>";
   echo "<td style=width:150px;height:200px;background-color:black;padding:20px;color:white;>";
   echo $result['status'];
   echo "<br>";
  echo "<form action=status.php method=get>"."<select name=select style=color:black;>"."<option value='pending'>"."PENDING"."</option>";
  echo "<option value='successful'>"."SUCCESSFUL"."</option>";
  echo "</select>";
  echo "<br>";
  echo "<input type=hidden name=cd value=";
  echo $result['mobile']; 
  echo  ">";
  echo "<input type=submit value=change style=color:black;>";
    echo "</form>";
  echo "</td>";
	echo "</tr>";
}
echo "</table>";
}
else{
  header('location:adminlogin.php');
}
?>
</body>
</html>