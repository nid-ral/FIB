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
           <link rel="stylesheet" href="wickedcss.min.css">

    <script type="text/javascript" src="heyy.js"></script>
</head>
<body style="background-color: lightgrey;" class="fadeIn">
<header>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="fiblogo.png" width="50px" height="50px" style="margin-top: -15px;"></a>
    </div>
          <a href="#" style="font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;font-size: 30px;margin-left: 10px;">Fight It Back</a>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="admin.php"> <i><span class="glyphicon glyphicon-tasks" style="color: white;font-size: 15px;"></span></i> Admin </a></li>
      <li class="active"><a href="#"><i><span class="glyphicon glyphicon-info-sign" style="color: white;font-size: 15px;"></span></i> Messages <span class="badge badge-light">
        <?php
        $connection=mysqli_connect('localhost','root','');
        mysqli_select_db($connection,'fib');
        $query=mysqli_query($connection,"SELECT message FROM contact WHERE status='not read'");
        echo mysqli_num_rows($query);
        ?>
      </span></a></li>
        <li><a href="adminsession.php"> <i><span class="glyphicon glyphicon-off" style="color: white;font-size: 15px;"></span></i> Sign Out</a></li>
    </ul>
  </div>
</nav>
</header>
<div style="margin-left: 10px;margin-top: 100px;width: 400px;height: 500px;background-color: #101010;overflow-y: scroll;border-radius: 20px;box-shadow: 5px 10px 8px blue;" >
<?php
 $connection=mysqli_connect('localhost','root','');
  mysqli_select_db($connection,'fib');
  $query=mysqli_query($connection,"select * from contact where status='not read'");
  while ($r=mysqli_fetch_array($query)) {
    echo "<br>"."<div style=opacity:0.1;>";
    echo "<form action=up2.php method=get>";
    echo "<h1 style=color:white;padding-left:40px;>";
    ?><a href="up.php?name=<?php echo $r['email']; ?>">
      <?php
      echo $r['name'];
      ?>
        
      </a>
      <?php
    echo "</h1>";
    echo "<h4 style=color:white;padding-left:40px;>".$r['email']."</h4>";
    
    echo "<input type=hidden name=cd value=";
    echo $r['email'];
    echo ">";
     echo "<input type=submit value=Open style=color:white;font-size:15px;background-color:red;margin-left:275px;>";
    echo "</form>";
    echo "<br>"."</div>";
    echo "<hr style=color:white;>";
  }
  $query1=mysqli_query($connection,"select * from contact where status='read'");
  while ($r1=mysqli_fetch_array($query1)) {
    echo "<br>";
     echo "<form action=up1.php method=get>";
   echo "<h1 style=color:white;padding-left:40px;>";
    ?><a href="up.php?name=<?php echo $r1['email']; ?>">
      <?php
      echo $r1['name'];
      ?>
        
      </a>
      <?php
    echo "</h1>";
        echo "<h4 style=color:white;padding-left:40px;>".$r1['email']."</h4>";
    
    echo "<input type=hidden name=cd value=";
    echo $r1['email'];
    echo ">";
     echo "<input type=submit onclick=up1.php value='Mark as unread' style=color:white;font-size:15px;background-color:red;margin-left:25px;>";
    echo "</form>";
    /*echo "<h1 style=color:white;padding-left:40px;>"."<a href=info.php>".$r1['name']."</a>"."</h1>";
    echo "<h4 style=color:white;padding-left:40px;>".$r1['email']."</h4>";
    echo "<br>";
    echo "<hr style=color:white;>";*/
  }
?>
</div>
<div id="inbox" style="width: 810px;margin-left: 420px;background-color: #101010;height: 500px;margin-top: -500px;border-radius: 20px;box-shadow: 10px 10px 8px blue;overflow-y: scroll;">
  <?php
  $query2=mysqli_query($connection,"select * from contact where status='read'");
  while ($r2=mysqli_fetch_array($query2)) {
    echo "<br>";
    echo "<h1 style=color:white;padding-left:40px;>".$r2['name']."</h1>";
    echo "<h4 style=color:white;padding-left:40px;>".$r2['email']."</h4>";
    echo "<h3 style=color:green;padding-left:150px;>"."Message :- "."</h3>"."<h4 style=color:white;padding-left:300px;margin-top:-30px;padding-right:10px;>".$r2['message']."</h4>";
    echo "<br>";
    echo "<hr style=color:white;>";
  }
  ?>
</div>
</body>
</html>

<?php
}
else{
  header('location:adminlogin.php');
}
?>