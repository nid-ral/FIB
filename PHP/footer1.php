<html>
<head>


    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
   	<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
   	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   	<style type="text/css">
.content-header{
  font-family: 'Oleo Script', cursive;
  color:#fcc500;
  font-size: 45px;
}

.section-content{
  text-align: center; 

}
#contact1{
    
    font-family: 'Teko', sans-serif;
  padding-top: 60px;
  width: 100%;
  height: 550px;
  background: #3a6186; /* fallback for old browsers */
  background: -webkit-linear-gradient(to left, #3a6186 , #89253e); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to left, #3a6186 , #89253e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    color : #fff;    
}
.contact-section{
  padding-top: 40px;
}
.contact-section .col-md-6{
  width: 50%;
}

.form-line{
  border-right: 1px solid #B29999;
}

.form-group{
  margin-top: 10px;
}
label{
  font-size: 1.3em;
  line-height: 1em;
  font-weight: normal;
}
.form-control{
  font-size: 1.3em;
  color: #080808;
}
textarea.form-control {
    height: 135px;
   /* margin-top: px;*/
}

.submit{
  font-size: 1.1em;
  float: right;
  width: 150px;
  background-color: transparent;
  color: #fff;

}

   	</style>
</head>
<body>
<footer>
<section id="contact1">
	<div class="section-content">
				<h1 class="section-header">Get in <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Touch with us</span></h1>
				<h3>If you have any suggestions/queries/complaints then, please write to us.</h3>
			</div>
			<div class="contact-section">
			<div class="container">
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
					<div class="col-md-6 form-line">
			  			<div class="form-group">
			  				<label for="exampleInputUsername">Your name</label>
					    	<input type="text" class="form-control" placeholder=" Enter Name" name="name">
				  		</div>
				  		<div class="form-group">
					    	<label for="exampleInputEmail">Email Address</label>
					    	<input type="email" class="form-control" id="exampleInputEmail" placeholder=" Enter Email id" name="email1">
					  	</div>	
					  	<div class="form-group">
					    	<label for="telephone">Mobile No.</label>
					    	<input type="tel" class="form-control" id="telephone" placeholder=" Enter 10-digit mobile no." name="telephone">
			  			</div>
			  		</div>
			  		<div class="col-md-6">
			  			<div class="form-group">
			  				<label for ="description"> Message</label>
			  			 	<textarea  class="form-control" id="description" placeholder="Enter Your Message" name="msg"></textarea>
			  			</div>
			  			<div>
			  				<input type="submit" name="s" class="btn btn-default submit" value="send message">
			  			</div>
			  			
					</div>
				</form>
			</div>
		</section>
		<div style="width: 100%;height: 50px;background-color: black;">
			<br>
			<h4 style="color: white;text-align: center;margin-top: 0px;">&copy copyright FIB2018 reserved</h4>
		</div>
</footer>
</body>
</html>

<?php
if (isset($_POST['s'])) {
$name=$_POST['name'];
$email=$_POST['email1'];
$telephone=$_POST['telephone'];
$msg=$_POST['msg'];

$connection=mysqli_connect('localhost','root','');
mysqli_select_db($connection,'fib');
$query1=mysqli_query($connection,"insert into queries values('$name','$email','$telephone','$msg')");
if (isset($query1)) {
	echo "<style>"."form{display:none;}"."</style>";
	echo "<h1 style=color:white;position:absolute;margin-top:1800px;margin-left:500px;>"."Thanks for contacting us"."</h1>";
}
else{
	echo "<h1 style=color:white;position:absolute;margin-top:1800px;margin-left:500px;>"."OOPS, Message not sent. Please try again"."</h1>";
}
}
?>