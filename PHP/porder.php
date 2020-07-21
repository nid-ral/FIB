<?php
@ob_start();
session_start();
if(isset($_SESSION['session_name']))
{
?>
<!DOCTYPE html>
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
          <a href="#" style="font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;font-size: 30px;margin-left: 10px;color: white;">Fight It Back</a>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="admin2.php"> <i><span class="glyphicon glyphicon-tasks" style="color: white;font-size: 15px;"></span></i> Admin </a></li>
      <li><a href="porder.php"><i><span class="glyphicon glyphicon-info-sign" style="color: white;font-size: 15px;"></span></i> Orders <span class="badge badge-light">
        <?php
        $connection=mysqli_connect('localhost','root','');
        mysqli_select_db($connection,'fib');
        $query=mysqli_query($connection,"SELECT fname FROM placedorder");
        echo mysqli_num_rows($query);
        ?>
      </span></a></li>
      <li><a href="message.php"><i><span class="glyphicon glyphicon-info-sign" style="color: white;font-size: 15px;"></span></i> Messages <span class="badge badge-light">
        <?php
        $connection=mysqli_connect('localhost','root','');
        mysqli_select_db($connection,'fib');
        $query=mysqli_query($connection,"SELECT message FROM queries");
        echo mysqli_num_rows($query);
        ?>
      </span></a></li>
        <li><a href="adminsession1.php"> <i><span class="glyphicon glyphicon-off" style="color: white;font-size: 15px;"></span></i> Sign Out</a></li>
    </ul>
  </div>
</nav>
</header>
<div>
<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'fib');
$query=mysqli_query($con,"select * from placedorder");
while ($result=mysqli_fetch_array($query)) {
  ?>
 
  <div id="novel" style="background-color:transparent;width:500px;height:380px;margin-left:50px;float:left;border:5px solid transparent;box-shadow: 5px 10px 18px #202020;font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;margin-top: 70px;">
  <?php
  echo "<br>";
  echo "<h4 style=color:orange;margin-left:10%;>"."Name : ".$result['fname']."</h4>";
  echo "<h4 style=color:orange;margin-left:10%;>"."Contact : ".$result['contact']."</h4>";
  echo "<h4 style=color:orange;margin-left:10%;>"."Address : ".$result['address']." INR"."</h4>";
    echo "<h4 style=color:orange;margin-left:10%;>"." City : ".$result['city']."</h4>";echo "<h4 style=color:orange;margin-left:10%;>"." Pin code : ".$result['pin']."</h4>";
    echo "<h4 style=color:orange;margin-left:10%;>"." Product Id : ".$result['pid']."</h4>";
echo "<h4 style=color:orange;margin-left:10%;>"." Order Placed on : ".$result['placedon']."</h4>";
?>
 <form action="deleteb1.php" method="get">
  <?php
  echo "<input type=hidden name=name value=";
  echo $result['pid'];
  echo ">";
  ?>
   <input type="submit" name="bidamount" style="width: 150px;margin-left: 300px;margin-top: 80px;position: absolute;height: 50px;background-color: orange;" value="REMOVE ORDER" onclick="location.href='deleteb1.php'">
</form>
<?php
 echo "</div>";
}
  ?>
</div>
</body>
</html>

<?php
}
else{
	header('location:register.php');
}
?>