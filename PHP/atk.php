<?php
@ob_start();
session_start();
if(isset($_SESSION['session_name']))
{
	include 'header1.php';
?>
<html>
<head>
	<title>Your orders</title>
	   <link rel="icon" href="fiblogo.png" type="image/png">
	   	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
	<h1 style="text-align: center;color: black;font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;" class="shake">YOUR CART</h1>
<hr style="color: black;">
	<?php
	$email1=$_SESSION['session_name'];
	$connection=mysqli_connect('localhost','root','');
	mysqli_select_db($connection,"fib");
 $query=mysqli_query($connection,"select * from orders where email='$email1'");
 while ($result=mysqli_fetch_array($query)) {
	?>
	<div id="novel" style="background-color:transparent;width:500px;height:380px;margin-left:50px;float:left;border:5px solid transparent;box-shadow: 5px 10px 18px #202020;font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;margin-top: 50px;">
	<?php
	echo "<br>";
	echo "<h4 style=color:orange;margin-left:50%;>"."Category : ".$result['oname']."</h4>";
	echo "<h4 style=color:orange;margin-left:50%;>"."Email : ".$result['email']."</h4>";
	echo "<h4 style=color:orange;margin-left:50%;>"."Final Price : ".$result['bid']." INR"."</h4>";
	echo "</div>";

	?>
	<form action="price.php" method="get">
	<?php
	echo "<input type=hidden name=bid value=";
	echo $result['onum'];
	echo ">";
}
	?>
	<input type="submit" style="color:white;margin-left:400px;width:120px;height:60px;background-color:orange;margin-top: 100px;position: absolute;" value="Check out" name="b">
</form>
<div style="background-color: black;width: 250px;margin-left: 900px;margin-top: 200px;position: absolute;">
<p style="color: white;">You have to pay the delivery charges first. After this only, you'll get the confirmation mail.</p>
<a href="https://www.instamojo.com/@nid__ral/lb6592bdebcdb43ab9b83359fda90d70a/" rel="im-checkout" data-behaviour="remote" data-style="flat" data-text="Pay Delivery Charges"></a>
<script src="https://js.instamojo.com/v1/button.js"></script>
</div>
<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'fib');
$query=mysqli_query($con,"select * from olexhibition where status='online'");
while ($result=mysqli_fetch_array($query)) {
	echo "<h4 style=color:orange;margin-left:70px;position:absolute;margin-top:70px;>";
  ?>
     <img src=<?php echo $result['ppic']; ?> width="200px" height="300px">
  <?php 
  echo "</h4>";
    echo "<h4 style=color:orange;position:absolute;margin-left:300px;margin-top:170px;>"." Posted By : ".$result['owner']."</h4>";
}
  ?>


</body>
</html>

<?php
}
else{
	header('location:register.php');
}
?>