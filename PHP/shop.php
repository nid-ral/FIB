<?php
@ob_start();
session_start();
if ($_SESSION['session_name']) {
include 'header1.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>BID Here</title>
		   <link rel="icon" href="fiblogo.png" type="image/png">
	<link rel="stylesheet" href="wickedcss.min.css">
	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
	<style type="text/css">
		#admin,#user,#home,#about,#contact,#ffib{
			display: none;
		}
		#signout,#change,#upbid,#cart{
			display: block;
		}
	</style>
</head>
<body>
	<div style="background-color: black;width: 100%;height: 80px;margin-top: 0px;">
		<br>
		<p style="color: white;margin-left: 200px;"> User Email : <?php echo $_SESSION['session_name']; ?> </p>
		<p style="color: white;margin-left: 200px;"><a href="accountnumber.php" style="color:white;" data-toggle="modal" data-target="#myModal">Special Account number</a></p>
		<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="display: block;color: black;">Your special account number can be used to reset your password if you don't remember it. note it down.</h4>
        </div>
        <div class="modal-body">
          <p style="display: block;color: black;">
              <?php
              $con=mysqli_connect('localhost','root','');
mysqli_select_db($con,"fib");
$query=mysqli_query($con,"select pin from register where email='$_SESSION[session_name]'");
$r=mysqli_fetch_array($query);
echo $r['pin'];
              ?>
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
	</div>
	<br>
	<br>
<h1 style="text-align: center;color: black;font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;" class="shake">NOVELS & PAINTINGS</h1>
<hr style="color: black;">
	<?php
	$connection=mysqli_connect('localhost','root','');
	mysqli_select_db($connection,"fib");
 $query=mysqli_query($connection,"select * from olexhibition where status='online'");
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
	<form action="bidding1.php" method="get">
	<input type="text" name="bidamount" style="width: 100px;margin-left: 250px;" placeholder="bid here">
	<?php
	echo "<input type=hidden name=bid value=";
	echo $result['pid'];
	echo ">";
	?>
	<input type="submit" style="color:white;margin-left:10px;width:120px;height:30px;background-color:orange;margin-top: 15px;position: absolute;" value="BID NOW" name="b">
</form>
	<?php
	echo "</div>";
}

	?>


</body>
</html>

<?php
}
else{
include 'header1.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>BID Here</title>
	<link rel="stylesheet" href="wickedcss.min.css">
	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
	<style type="text/css">
		#admin,#user,#home,#about,#contact{
			display: block;
		}
		#signout,#change,#upbid,#cart{
			display: none;
		}
	</style>
</head>
<body>
	<br>
	<br>
<h1 style="text-align: center;color: black;font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;" class="shake">NOVELS & PAINTINGS</h1>
<hr style="color: black;">
	<?php
	$connection=mysqli_connect('localhost','root','');
	mysqli_select_db($connection,"fib");
 $query=mysqli_query($connection,"select * from olexhibition where status='online'");
 while ($result=mysqli_fetch_array($query)) {
	?>
	<div id="novel" style="background-color:transparent;width:500px;height:380px;margin-left:50px;float:left;border:5px solid transparent;box-shadow: 5px 10px 18px #202020;font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;margin-top: 50px;">
	<?php
	echo "<br>";
	echo "<h4 style=color:orange;margin-left:50%;>"."Category : ".$result['pname']."</h4>";
	echo "<h4 style=color:orange;margin-left:50%;>"."Name of product : ".$result['pdesc']."</h4>";
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
	<form action="bidding1.php" method="get">
	<input type="text" name="bidamount" style="width: 100px;margin-left: 250px;" placeholder="bid here">
	<input type="submit" style="color:white;margin-left:10px;width:120px;height:30px;background-color:orange;margin-top: 15px;position: absolute;" value="BID NOW" name="b">
</form>
	<?php
	echo "</div>";
}

	?>


</body>
</html>
<?php
}
?>