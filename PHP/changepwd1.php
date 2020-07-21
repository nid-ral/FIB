<?php
@ob_start();
session_start();
if(isset($_SESSION['session_name']))
{
include 'header1.php';
echo "<style>"."#admin{display:none;} #user{display:none;} #home{display:none;} #about{display:none;}"."#signout{display:block;} #change{display:block;} #sectional{display:block;} #contact{display:none;}"."</style>";
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
      margin-left: 460px;
    }

  </style>
</head>
<body>
  <div style="background-color: black;width: 100%;height: 60px;margin-top: -110px;">
    <br>
    <p style="color: white;margin-left: 200px;"> User Email : <?php echo $_SESSION['session_name']; ?> </p>
  </div>
 
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
    <div style="background-image:url('a6.jpg');background-attachment: fixed;background-size: cover;margin-top: -20px;height: 518px;">
    <br><br><br>
<form name="f1" action="<?php $_SERVER['PHP_SELF']; ?>" >
 
    <br>
<input type="password" name="oldpassword" placeholder="Current Password" /><br/> <br>    
<input type="password" name="password" placeholder="New Password" /><br/>  <br>
 <p id="em" style="background-color:red;color:white;width:270px;height:20px;font-size:15px;position:absolute;padding-left:15px;display: none;margin-left: 520px;margin-top: -25px;"></p>
<input type="password" placeholder="Re-enter Password" name="password2" onmouseout="return matchpass();" />
 <p id="em1" style="background-color:red;color:white;width:230px;height:20px;font-size:15px;position:absolute;padding-left:15px;display: none;margin-left: 530px;margin-top: -5px;"></p><br/>  <br>
<input type="submit" name="s" value="Change Password" style="background-color:orange;width: 150px;height: 50px;margin-left: 530px;font-weight: 700;box-shadow: 5px 8px 10px black;color: white;"> 
</form>  
</div>
<div style="width: 250px;height: 250px;background-color: orange;position: absolute;margin-top: -350px;margin-left: 40px;transform: rotate(-20deg);">
  <img src="change.jpg" width="200px" height="200px" style="margin-top: 30px;margin-left: 30px;">
</div>
</body>
</html>


<?php
if (isset($_GET['s'])) {
$old=$_GET['oldpassword'];
$new=$_GET['password'];
$new1=$_GET['password2'];
$email=$_SESSION['session_name'];
$connection=mysqli_connect('localhost','root','');
mysqli_select_db($connection,'fib');
$q=mysqli_query($connection,"select * from register where email='$email'");
$r=mysqli_fetch_array($q);
if (($new==$new1)&&($old==$r['password'])) {

$query=mysqli_query($connection,"update register set password='$new' where password='$old' and email='$email'");
if ($query) {
  echo "<a href=user.php style=background-color:black;color:white;margin-left:600px;font-size:30px;margin-top:-800px;position:absolute;>"."Go Back"."</a>";
  echo "<style>"."form{display:none;}"."</style>";
    echo "<div style=padding-left:30px;padding-top:20px;background-color:#101010;color:white;margin-left:450px;margin-top:-400px;position:absolute;width:320px;height:150px;font-size:30px;>"."Password Changed"."</div>";
}
else{
  echo "<a href=user.php style=background-color:black;color:white;margin-left:600px;font-size:30px;margin-top:-800px;position:absolute;>"."Go Back"."</a>";
  echo "<style>"."form{display:none;}"."</style>";
     echo "<div style=padding-left:60px;padding-top:40px;background-color:#101010;color:white;margin-left:450px;margin-top:-400px;position:absolute;width:400px;height:130px;font-size:30px;>"."Password not Changed";
        echo "<br>";
    echo "<a href= changepwd1.php style=color:white;>"."please click here to try again."."</a>";
    echo "</div>";
}
}
else
{

  echo "<a href=user.php style=background-color:black;color:white;margin-left:600px;font-size:30px;margin-top:-800px;position:absolute;>"."Go Back"."</a>";
  echo "<style>"."form{display:none;}"."</style>";
    echo "<div style=padding-left:30px;padding-top:20px;background-color:#101010;color:white;margin-left:450px;margin-top:-400px;width:310px;height:150px;font-size:30px;position:absolute;>"." wrong Password";
    echo "<br>";
    echo "<a href= changepwd1.php style=color:white;>"."please click here to try again."."</a>";
    echo "</div>";
}
}
}
else{
  header('location:userlogin.php');
}
?>