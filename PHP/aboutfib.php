<?php
@ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>About FIB </title>
	 <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>

    <link rel="icon" href="FIB1.png" type="image/png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link rel="stylesheet" type="text/css" href="hey.css">
    <script type="text/javascript" src="heyy.js"></script>
  <style type="text/css">

/* sidebar */
aside#sidebar{
    float: right;
    width: 30%;
    margin-top: 10px;
    font-family: Aclonica;
    font-size: 18px;
}

/* article */
article#main-col{
    float: left;
     font-size: 18px;
    width: 65%;
    font-family: Aclonica;
    margin-top: 10px;

}
.dark{
    padding: 15px;
    background: #35424a;
    color: #ffffff;
    margin-top: 30px;
    margin-bottom: 10px;
}
.container{
    width: 80%;
    height: 600px;
    margin: auto;
    overflow: hidden;
    text-align: justify;
}
section{
  height: 0px;
  width: 100%;
}
body{
  background-image: url('a13.jpg');
  background-size: cover;
  background-attachment: fixed;
}
  </style>

</head>
<?php
include 'header.php';
?>
<br><br>
<body>
<section id="main">
            <div class="container">
              <h1 style="color: white;text-align: center;font-weight: 1000;font-size: 70px;font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;">ABOUT US</h1>
              <hr style="height: 6px;background-color: #35424a;width: 1400px;">
                <article id="main-col">
                    <p class="dark">FIB (Fight It Back) is a platform for people who are willing to live their lives and for those, who want to take a stand for themselves and others who are suffering from any social issue/ has witnessed a social crime. We basically will look into your request and verify if it's a valid request from a genuine source and then, will fulfill your request.
                         We harness the power of cloud, analytics and emerging 
                         technologies to help our clients adapt to the digital world and make them successful.<br>
                         Together, we stand and fight all the odds.
                         One thing that makes us different from all the other platforms and companies is that we try to make a difference in everyone's lives .
                         <b>FIGHT IT BACK WITH ALL OF US.</b>
                    </p>
                </article>
                <aside id='sidebar'>
                    <div class="dark">
                    <h3>How we do it?</h3>
                    <p>Providing the best services has always been a challenge for any organisation, especially for an online organisation and that's why we have
                    decided to provide the services that you want. 
                    you can email us your suggestions and expectations. We will surely try to amend things accordingly, if the 
                    requests are genuine and feasible. 
                   </p>
                    </div>
                </aside>
            </div>
        </section>
        
</body>
</html>

<?php
include 'footer.php';
?>