<?php
@ob_start();
session_start();
if ($_SESSION['session_name']) {
?>

<!DOCTYPE html>
<html>
<head>
	<title>Bid Here (FIB)</title>
    <link rel="icon" href="fiblogo.png" type="image/png">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style type="text/css">
	HTML,
BODY {
  height: 100%;
}

.webcoderskull {
  font-size: 0.5em;
}

svg {
  position: absolute;
  width: 100%;
  height: 100%;
   background: #000;
  background-size: 0.12em 100%;
  font: 16em/1 Arial;
}

.webcoderskull-1 {
  fill: none;
  stroke: white;
  stroke-dasharray: 7% 28%;
  stroke-width: 3px;
  -webkit-animation: stroke-offset 7s infinite linear;
          animation: stroke-offset 7s infinite linear;
}
.webcoderskull-1:nth-child(1) {
  stroke: #360745;
  stroke-dashoffset: 7%;
}
.webcoderskull-1:nth-child(2) {
  stroke: #d61c59;
  stroke-dashoffset: 14%;
}
.webcoderskull-1:nth-child(3) {
  stroke: #e7d84b;
  stroke-dashoffset: 21%;
}
.webcoderskull-1:nth-child(4) {
  stroke: #efeac5;
  stroke-dashoffset: 28%;
}
.webcoderskull-1:nth-child(5) {
  stroke: #1b8798;
  stroke-dashoffset: 35%;
}

@-webkit-keyframes stroke-offset {
  50% {
    stroke-dashoffset: 35%;
    stroke-dasharray: 0 87.5%;
  }
}

@keyframes stroke-offset {
  50% {
    stroke-dashoffset: 35%;
    stroke-dasharray: 0 87.5%;
  }
}

</style>
</head>
<body>
	<div style="width: 100%;background-color: lightblue;height: 60px;">
		
		<a href="main1.php" style="color: white;text-decoration: none;font-size: 35px;margin-left: 930px;"><img src="cart.png" width="40px" height="40px"></a>
		<p style="position: absolute;color: black;margin-left: 938px;margin-top: -44px;font-weight: 1000; "><span class="badge badge-light">
    <?php
     $connection=mysqli_connect('localhost','root','');
        mysqli_select_db($connection,'fib');
        $query=mysqli_query($connection,"SELECT oname FROM orders WHERE status='added'");
        echo mysqli_num_rows($query);
    ?>  
    </span>
    </p>
		<a href="" style="text-decoration: none;margin-left: 50px;position: absolute;"><img src="get.png" width="200px" height="60px"></a>
	</div>
<svg viewBox="0 0 1800 600">
  <symbol id="s-text">
    <text text-anchor="middle"
          x="50%"
          y="35%"
          class="webcoderskull"
          >
      WELCOME
    </text>
    <text text-anchor="middle"
          x="50%"
          y="68%"
          class="text--line"
          >
     BID HERE.
    </text>
    
  </symbol>
  
  <g class="g-ants">
    <use xlink:href="#s-text"
      class="webcoderskull-1"></use>     
    <use xlink:href="#s-text"
      class="webcoderskull-1"></use>     
    <use xlink:href="#s-text"
      class="webcoderskull-1"></use>     
    <use xlink:href="#s-text"
      class="webcoderskull-1"></use>     
    <use xlink:href="#s-text"
      class="webcoderskull-1"></use>     
  </g>
  
  
</svg>
<div style="width: 100%;height: 630px;border: 5px solid lightblue;margin-top: 600px;">
	<div style="width: 1170px;height: 580px;border: 5px solid lightblue;margin: 20px;">
	<div style="margin-left: 480px;width: 250px;height: 100px;border:5px solid #101010;border-bottom-color: transparent;margin-top: 10px;">
		<p style="font-weight: 1000;margin: 25px;font-size: 22px;color: orange;">Online Exhibition</p>
    <div class="onex">
      
    </div>
	</div>
	
</div>
</div>
</body>
</html>

<?php
}
else{
  header('location:register.php');
}
?>