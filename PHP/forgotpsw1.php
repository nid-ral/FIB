<?php
include 'header1.php';
?>
<body>
    <br><br><br><br>
    <h1 style="text-align: center;">Forgot Password? RESET IT HERE.</h1>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" style="text-align: center;">
        <input type="text" name="email" placeholder="Enter your email" style="width: 500px;">
        <br>
        <input type="text" name="pin" placeholder="Enter your account pin" style="width: 500px;">
        <br>
        <input type="Password" name="pswd" placeholder="Enter new Password" style="width: 500px;">
        <br>
        <input type="submit" name="s" placeholder="SUBMIT" style="width: 100px;height: 50px;background-color: black;color: white;">
    </form>
</body>
<?php
if (isset($_POST['s'])) {
	$email=$_POST['email'];
	$pin=$_POST['pin'];
	$password=$_POST['pswd'];
	$connection=mysqli_connect("localhost","root","");
	mysqli_select_db($connection,'fib');
	$query=mysqli_query($connection,"update register set password='$password' where pin='$pin' and email='$email'");
  if ($query) {
 	echo "<p style=color:red;position:absolute;margin-top:0px;margin-left:500px;>"."Password changed successfully."."</p>";
 }
 else{
 	echo "<p style=color:red;position:absolute;margin-top:0px;margin-left:500px;>"."WRONG DETAILS."."</p>";
}
 mysqli_close($connection);
}
?>