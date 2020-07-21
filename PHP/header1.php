<?php
@ob_start();
?>
<!DOCTYPE html>
<html>
<head>

     <link rel="icon" href="fiblogo.png" type="image/png">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link rel="stylesheet" type="text/css" href="hey22.css">
    <script type="text/javascript" src="heyy.js"></script>
</head>

<?php
if (isset($_SESSION['session_name'])) {
  session_start();
?>

<body>
<header>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="main.php"><img src="fiblogo.png" width="50px" height="50px" style="margin-top: -15px;"></a>
    </div>
          <a href="main.php" style="font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;font-size: 30px;margin-left: 10px;text-decoration: none;color: white;" id="ffib">Fight It Back</a>
    <ul class="nav navbar-nav navbar-right">
      <li id="admin"><a href="admin1.php"> <i><span class="glyphicon glyphicon-tasks" style="color: white;font-size: 15px;"></span></i> Admin LogIn</a></li>
      <li id="user"><a href="register.php" > <i><span class="glyphicon glyphicon-user" style="color: white;font-size: 15px;"></span></i> SignUp/LogIn</a></li>
      <li id="home"><a href="main1.php"><i><span class="glyphicon glyphicon-home" style="color: white;font-size: 15px;"></span></i> HOME</a></li>
        <li id="cart"><a href="atk.php"><img src="cart1.png" width="20px" height="20px"></a>
          <p style="position: absolute;color: white;margin-top: -51px;margin-left: 20px;font-weight: 1000; "><span class="badge badge-light">
   <?php
   $yo=$_SESSION['session_name'];
    $connection=mysqli_connect('localhost','root','');
        mysqli_select_db($connection,'fib');
        $query=mysqli_query($connection,"SELECT oname FROM orders WHERE status='added' and email='$yo'");
        echo mysqli_num_rows($query);
   ?>
    </span>
    </p>
        </li>
      <li id="upbid"><a href="uploadbid.php">Upload</a></li>
      <li id="sectional">
        <a href="shop.php">Bid Here </a>
      </li>
      <li id="about"><a href="about1.php">ABOUT</a></li>
      <li id="contact"><a href="main1.php#contact1">CONTACT</a></li>
      <li id="change"><a href="changepwd1.php">Change Password</a></li>
       <li id="signout"><a href="usersession1.php"> <i><span class="glyphicon glyphicon-off" style="color: white;font-size: 15px;"></span></i> Sign Out</a></li>
    </ul>
  </div>
</nav>
</header>
</body>
</html>

<?php
}
else
{
  ?>
<html>
<body>
<header>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="main.php"><img src="fiblogo.png" width="50px" height="50px" style="margin-top: -15px;"></a>
    </div>
          <a href="main.php" style="font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;font-size: 30px;margin-left: 10px;text-decoration: none;color: white;" id="ffib">Fight It Back</a>
    <ul class="nav navbar-nav navbar-right">
      <li id="admin"><a href="admin1.php"> <i><span class="glyphicon glyphicon-tasks" style="color: white;font-size: 15px;"></span></i> Admin LogIn</a></li>
      <li id="user"><a href="register.php" > <i><span class="glyphicon glyphicon-user" style="color: white;font-size: 15px;"></span></i> SignUp/LogIn</a></li>
      <li id="home"><a href="main1.php"><i><span class="glyphicon glyphicon-home" style="color: white;font-size: 15px;"></span></i> HOME</a></li>
        <li id="cart"><a href="addtokart.php"><img src="cart1.png" width="20px" height="20px"></a>
          <p style="position: absolute;color: white;margin-top: -51px;margin-left: 20px;font-weight: 1000; "><span class="badge badge-light">
   
    </span>
    </p>
        </li>
      <li id="upbid"><a href="uploadbid.php">Upload</a></li>
      <li id="sectional">
        <a href="shop.php">Bid Here </a>
      </li>
      <li id="about"><a href="about1.php">ABOUT</a></li>
      <li id="contact"><a href="main1.php#contact1">CONTACT</a></li>
      <li id="change"><a href="changepwd1.php">Change Password</a></li>
       <li id="signout"><a href="usersession1.php"> <i><span class="glyphicon glyphicon-off" style="color: white;font-size: 15px;"></span></i> Sign Out</a></li>
    </ul>
  </div>
</nav>
</header>
</body>
</html>

  <?php
}
?>
