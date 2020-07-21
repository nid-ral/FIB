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
          <a href="#" style="font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;font-size: 30px;margin-left: 10px;color: white;">Fight It Back</a>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="#"> <i><span class="glyphicon glyphicon-tasks" style="color: white;font-size: 15px;"></span></i> Admin </a></li>
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
<br><br><br><br>

	<h1 style="color: black;text-align: center;">ALL UPLOADS</h1>
	<br>
<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'fib');
$query=mysqli_query($con,"select * from olexhibition where status='online'");
while ($result=mysqli_fetch_array($query)) {
  ?>
  <div id="novel" style="background-color:transparent;width:500px;height:380px;margin-left:50px;float:left;border:5px solid transparent;box-shadow: 5px 10px 18px #202020;font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;margin-top: 50px;">
  <?php
  echo "<br>";
  echo "<h4 style=color:orange;margin-left:50%;>"."Category : ".$result['pname']."</h4>";
  echo "<h4 style=color:orange;margin-left:50%;>"."Description : ".$result['pdesc']."</h4>";
  echo "<h4 style=color:orange;margin-left:50%;>"."Starting Bid : ".$result['sbid']." INR"."</h4>";
    echo "<h4 style=color:orange;margin-left:50%;>"." Posted By : ".$result['owner']."</h4>";
  echo "<h4 style=color:orange;margin-left:50%;>"."Last Bid : ".$result['lbid']." INR"."</h4>";
  echo "<h4 style=color:orange;margin-left:50%;>"." Last Bid By : ".$result['bidowner']."</h4>";

  echo "<h4 style=color:orange;margin-left:50%;>"."Posted on ".$result['date']."</h4>";
  echo "<h4 style=color:orange;margin-left:50%;>"."Available till ".$result['ldate']."</h4>";
  echo "<h4 style=color:orange;margin-left:10px;position:absolute;margin-top:-230px;>";
  ?>
     <img src=<?php echo $result['ppic']; ?> width="200px" height="300px">
  <?php 
  echo "</h4>";
  ?>
  <form action="deleteb.php" method="get">
  <input type="submit" name="bidamount" style="width: 100px;margin-left: 250px;margin-top: 18px;" value="delete" onclick="location.href='deleteb.php'">
  <?php
  echo "<input type=hidden name=name value=";
  echo $result['pid'];
  echo ">";
  ?>
</form>
<form action="stopb.php" method="get">
  <?php
  echo "<input type=hidden name=name value=";
  echo $result['pid'];
  echo ">";
  ?>
   <?php
  echo "<input type=hidden name=pname value=";
  echo $result['pname'];
  echo ">";
  ?>
   <?php
  echo "<input type=hidden name=bidowner value=";
  echo $result['bidowner'];
  echo ">";
  ?>
  <?php
  echo "<input type=hidden name=lbid value=";
  echo $result['lbid'];
  echo ">";
  ?>
  <input type="submit" style="color:white;margin-left:360px;width:120px;height:60px;background-color:orange;margin-top: -40px;position: absolute;padding: 8px;" name="b" value="STOP BIDDING" >
</form>
  <?php
  echo "</div>";
}
}
else{
  header('location:admin1.php');
}
?>
</body>
</html>