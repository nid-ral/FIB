<!DOCTYPE html>
<html>
<head>
  <title>FIB</title>
  <link rel="icon" href="fiblogo.png" type="image/png">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <link rel="stylesheet" href="wickedcss.min.css">
  <script type="text/javascript">
    $('document').ready(function(){
      $(".a").click(function(){
        var hash=this.hash;
        var hash1=$(hash).offset().top;
        $('html,body').animate({
          scrollTop:hash1
        },900);
      })
    });
  </script>

</head>
<?php
include 'header1.php';
?>
<style type="text/css">

  body{
    background-image: url('stressb.jpg');
    background-attachment: fixed;
    background-size: cover;
  }
  #change,#signout{
    display: none;
  }
 button:onclick{
  text-decoration: none;
 }
</style>
 
<body class="bounceIn">
  <div style="background-image: url('a1.jpg');background-attachment: fixed;background-size: cover;width: 100%;height: 600px;" class="shake">
  <br><br>
  <div style="border-radius: 50%;width: 200px;height: 200px;background-color: orange;margin-left: 10%;position: absolute;margin-top: 50px;" class="floater">
    <h4 style="position: absolute;color: white;margin-top: 80px;margin-left: 20px;">Bidding Made Easy     Happy BIDDING.</h4>
  </div>
  <button onclick="location.href='uploadbid.php'">UPLOAD STUFF FOR BIDDING</button>
  <br><br>
  <div style="border-radius: 50%;width: 200px;height: 200px;background-color: orange;margin-left: 70%;position: absolute;margin-top: 300px;" class="floater">
    <h4 style="position: absolute;color: white;margin-top: 80px;margin-left: 20px;" >Template Demos, paintings and novels.</h4>
  </div>
  <div style="width: 400px;height: 400px;background-color: white;position: absolute;margin-left: 400px;">
    <br>
  <div style="width: 380px;height: 360px;background-color: lightgrey;position: absolute;margin-left: 10px;border:2px solid black;">
    <div style="margin-top: -85px;">
    <?php
    include 'bookCover.html';
    ?>
  </div>
  <a href="novel.php"><img src="right.jpg" width="70px" height="70px" style="position: absolute;margin-left: 300px;margin-top: -300px;"></a>
  </div>  
  </div>
</div>
  <div style="background-color: black;opacity: 0.5;width: 400px;margin-left: 830px;height: 200px;margin-top: 280px;position: absolute;" class="pulse">
    <h3 style="color: orange;padding: 40px;font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;">Shopping is known to be a stress buster and it's more fun when combined with Bidding.</h3>

  </div>
<a href="#d3" class="a"><img src="down-arrow.png" width="70" height="70" style="margin-left: 990px;margin-top: 500px;position: absolute;" class="heartbeat"></a>
 <div style="background-color: black;width: 100%;height: 750px;margin-top: 800px;position: absolute;" id="d3">
  <button onclick="cal(-1);" style="width: 100px;height: 50px;margin-left: 20px;margin-top: 300px;color: white;background-color: transparent;font-size: 50px;position: absolute;"><</button>
<button onclick="cal(1);" style="width: 100px;height: 50px;margin-left: 1050px;margin-top:300px;background-color: transparent;color: white;font-size: 50px;position: absolute;">></button>
<h1 style="color:white; text-decoration: none;position: absolute;margin-top: 350px;margin-left: 550px;background-color: white;font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;border:5px solid transparent;box-shadow: 8px 5px 10px black;">
  <a href="bidding.php" class="typewrite" data-period="2000" data-type='[ "WELCOME TO FIB","Original Paintings", "Signed Novels"]' style="text-decoration: none;">
    <span class="wrap"></span>
  </a>
</h1>
<script type="text/javascript">
  //made by vipul mirajkar thevipulm.appspot.com
var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
</script>
    <img src="b1.jpeg" width="100%" height="700" class="im1">
     <img src="b2.jpg" width="100%" height="700" class="im1">
      <img src="b3.jpeg" width="100%" height="700" class="im1">
    
<script type="text/javascript">
  var index=1;
  var n;
  show(index);
  function cal(n){
    show(index+=n);
  }
    function show(n){
    var i;
    var x=document.getElementsByClassName('im1');
    if(n>x.length){
      index=1;
    }
    if(n<1){
      index=x.length;
    }
    for(i=0;i<x.length;i++){
      x[i].style.display='none';
    }
    x[index-1].style.display='block';

  }
</script>
<script type="text/javascript">
  var count=0;
  f1();
  function f1(){
    var x=document.getElementsByClassName('im1');
    for(var i=0;i<x.length;i++){
      x[i].style.display='none';
    }
    count++;
    if(count>x.length){
      count=1;
    }
    x[count-1].style.display="block";
    setTimeout(f1,6000);
  }
</script>
 </div>
</body>
</html>

<?php
include 'footer1.php';
echo "<style>"."footer{margin-top:1500px;}"."</style>";
?>