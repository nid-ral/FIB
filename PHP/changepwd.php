<?php
@ob_start();
session_start();
if(isset($_SESSION['session_name']))
{
include 'header.php';
echo "<style>"."#admin{display:none;} #user{display:none;} #home{display:none;} #about{display:none;}"."#signout{display:block;} #change{display:block;} #sectional{display:none;}"."</style>";
session_start();
?>
<br><br><br><br>

<br><br>
<!DOCTYPE html>
<html>
<head>
	<title>change password</title>
  <style type="text/css">
    input[type='text'], input[type='password'], input[type='submit']{
      width:300px;
      margin-left: 500px;
    }

  </style>
</head>
<body>
  <div style="background-color: black;width: 100%;height: 60px;margin-top: -110px;">
    <br>
    <p style="color: white;margin-left: 200px;"> User Email : <?php echo $_SESSION['session_name']; ?> </p>
  </div>
  <hr style="position: absolute;background-color: white;width: 1200px;margin-left: 70px;">
<script type="text/javascript">   
function matchpass(){  
var firstpassword=document.f1.password.value;  
var secondpassword=document.f1.password2.value; 
  
  
if(firstpassword.length<6){  
   document.getElementById('em').style.display="block";
  document.getElementById('em').innerHTML="should be at least 6 characters long"; 
  return false;  
  }   
  else{
  document.getElementById('em').style.display="none";
if(firstpassword==secondpassword){  
  document.getElementById('em1').style.display="none";
return true;  
}  
else{  
  document.getElementById('em1').style.display="block";
  document.getElementById('em1').innerHTML="password must be same";  
return false;  
}  
}
}  
</script>  
<a href='user.php' style="background-color:black;color:white;margin-left:600px;font-size:30px;margin-top:-20px;position:absolute;">Go Back</a>
    <div style="background-color:#101010;margin-top: -20px;height: 500px;">
    <br><br><br>
<form name="f1" action="<?php $_SERVER['PHP_SELF']; ?>" >
    <h1 style="margin-left: 460px;color: white">Change Your Password</h1>
    <br>
<input type="password" name="oldpassword" placeholder="Current Password" /><br/> <br>    
<input type="password" name="password" placeholder="New Password" /><br/>  <br>
 <p id="em" style="background-color:red;color:white;width:270px;height:20px;font-size:15px;position:absolute;padding-left:15px;display: none;margin-left: 520px;margin-top: -25px;"></p>
<input type="password" placeholder="Re-enter Password" name="password2" onmouseout="return matchpass();" />
 <p id="em1" style="background-color:red;color:white;width:230px;height:20px;font-size:15px;position:absolute;padding-left:15px;display: none;margin-left: 530px;margin-top: -5px;"></p><br/>  <br>
<input type="submit" name="s" value="Change Password" style="background-color:lightblue;width: 150px;height: 30px;margin-left: 580px;"> 
</form>  
</div>
</body>
</html>


<?php
if (isset($_GET['s'])) {
$old=$_GET['oldpassword'];
$new=$_GET['password'];
$new1=$_GET['password2'];
$email=$_SESSION['session_name'];
if ($new==$new1) {
$connection=mysqli_connect('localhost','root','');
mysqli_select_db($connection,'fib');
$query=mysqli_query($connection,"update signup set password='$new' where password='$old' and email='$email'");
if ($query) {
  echo "<a href=user.php style=background-color:black;color:white;margin-left:600px;font-size:30px;margin-top:-800px;position:absolute;>"."Go Back"."</a>";
  echo "<style>"."form{display:none;}"."</style>";
    echo "<div style=padding-left:30px;padding-top:2px;background-color:green;color:white;margin-left:450px;margin-top:-300px;position:absolute;width:400px;height:150px;font-size:30px;>"."Password Changed"."</div>";
}
else{
  echo "<a href=user.php style=background-color:black;color:white;margin-left:600px;font-size:30px;margin-top:-800px;position:absolute;>"."Go Back"."</a>";
  echo "<style>"."form{display:none;}"."</style>";
     echo "<div style=padding-left:60px;padding-top:40px;background-color:green;color:white;margin-left:450px;margin-top:-600px;position:absolute;width:400px;height:130px;font-size:30px;>"."Password not Changed";
        echo "<br>";
    echo "<a href= changepwd.php style=color:white;>"."please click here to try again."."</a>";
    echo "</div>";
}
}
else
{

  echo "<a href=user.php style=background-color:black;color:white;margin-left:600px;font-size:30px;margin-top:-800px;position:absolute;>"."Go Back"."</a>";
  echo "<style>"."form{display:none;}"."</style>";
    echo "<div style=padding-left:30px;padding-top:20px;background-color:green;color:white;margin-left:450px;margin-top:-400px;width:400px;height:150px;font-size:30px;position:absolute;>"."Passwords don't match";
    echo "<br>";
    echo "<a href= changepwd.php style=color:white;>"."please click here to try again."."</a>";
    echo "</div>";
}
}
}
else{
  header('location:userlogin.php');
}
?>