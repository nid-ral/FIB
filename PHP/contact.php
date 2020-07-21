<?php
@ob_start();
include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
          <link rel="stylesheet" href="wickedcss.min.css">
    <script type="text/javascript">
function validateemail()  
{  
var x=document.myform.email.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
    document.getElementById('em').style.display="block";
  document.getElementById('em').innerHTML="Please enter a valid e-mail";  
  return false;  
  }  
  else
  {
    document.getElementById('em').style.display="none";
  }
}  
</script>
    
	<style type="text/css">
    body{
        background-image: url('a11.jpeg');
        background-attachment: fixed;
        background-size: cover;
    }
	aside#sidebar{
    float: left;
    margin-left: 470px;
    width: 30%;
    margin-top: 20px;
    
}
aside#sidebar .quote input, aside#sidebar .quote textarea{
    width: 250px;
    padding: 5px;
    color: black;
}

.dark{
    padding: 15px;
    background: transparent;
    color: #ffffff;
    margin-top: 10px;
    margin-bottom: 10px;
}
#mybtn{
	width: 200px;
	margin-left: 80px;
    background-color: black;
	}
	</style>
</head>
<body class="fadeIn">
	<br><br><br><br>
     <aside id='sidebar'>
                <div class="dark">
                    <h3 style="text-align: center;color: white;background-color: black;font-size: 30px;">Contact Us By writing to us</h3>
                    <form action='<?php $_SERVER['PHP_SELF'];?>' method="post" class="quote" enctype="multipart/form-data" name="myform">
                        <div>
                            <input id="n" type="text" placeholder="Name" name="name" style="width: 350px;background-color: black;color: white;"/>
                        </div>
                        <div>
                            <input id="e" type="text" placeholder="E-Mail" name="email" style="width: 350px;background-color: black;color: white;" onkeyup="return validateemail();"/>
                            <p id="em" style="background-color:red;color:white;width:230px;height:20px;font-size:15px;position:absolute;padding-left:15px;display: none;margin-left: 60px;margin-top: -5px;"></p>
                        </div>
                        <div>
                            <label>Message</label><br>
                            <textarea id="m" placeholder="Message" name="message" style="width: 350px;margin-left: 10px;height: 200px;background-color: black;color: white;"></textarea>
                        </div>
                      
                        <button id="mybtn" class="button_1" type='submit' name="s">Send</button>
                    </form>
            </aside>
            <div style="background-color: black;width: 200px;height: 100px;margin-top: 130px;position: absolute;margin-left:175px;border:2px solid white;" id="division1">
    <p style="padding: 20px;color: white;font-size: 18px;">YOU'LL GET OUR REPLY ON YOUR EMAIL.YOUR MESSAGE IS IMPORTANT TO US.</p>
</div>
    <script type="text/javascript">
$('document').ready(function e(){
    $("#division1").animate({height: '+=100px'},4000);
    $("#division1").animate({height: '-=100px'},4000);
    window.setTimeout(function() { e() }, 500)
});
</script>
</body>
</html>
<?php
include 'footer.php';
?>


<?php
if (isset($_POST['s'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
$connection=mysqli_connect('localhost','root','');
mysqli_select_db($connection,'fib');
$query=mysqli_query($connection,"insert into contact values('$name','$email','$message','not read')");
if ($query) {
    echo "<style>"."aside{display:none;}"."</style>";
    echo "<div style=background-color:green;color:white;margin-left:450px;margin-top:100px;width:400px;height:130px;font-size:30px;>"."MESSAGE SENT.Thank you, we'll get back to you shortly."."</div>";
}
else{
     echo "<style>"."aside{display:none;}"."</style>";
    echo "<div style=background-color:green;color:white;margin-left:450px;margin-top:100px;width:400px;height:130px;font-size:30px;>"."EMAIL ALREADY EXISTS.";
    echo "<br>";
    echo "<a href= contact.php style=color:white;>"."please click here to try again."."</a>";
    echo "</div>";
}

/*else{
    ?>
<script type="text/javascript">
    alert('please enter a valid email');
</script>
    <?php
}*/
}
?>