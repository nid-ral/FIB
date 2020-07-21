<?php
@ob_start();
session_start();
if(isset($_SESSION['session_name']))
{
$name=$_GET['name'];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,"fib");
$query=mysqli_query($con,"delete from queries where email='$name'");
if ($query=='1') {
?>
	<script type="text/javascript">
		alert('deleted');
	</script>
<?php
header('location:message.php');
}
else{
?>
	<script type="text/javascript">
		alert('can not delete');
	</script>
<?php
}
}
?>