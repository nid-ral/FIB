<?php
include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Motivational</title>
	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
	<style type="text/css">
			.im1{
			position: absolute;
			animation-name: fade;
			animation-duration: 1s;
		}
		@keyframes fade {
         from {
         	opacity: .4;
         } 
         to {
         	opacity: 1;
         }
         }
         @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);

#div4 {
  background-color: #3e94ec;
  font-family: "Roboto", helvetica, arial, sans-serif;
  font-size: 16px;
  font-weight: 400;
  text-rendering: optimizeLegibility;
}

div.table-title {
   display: block;
  margin: auto;
  max-width: 600px;
  padding:5px;
  width: 100%;
}

.table-title h3 {
   color: #fafafa;
   font-size: 30px;
   font-weight: 400;
   font-style:normal;
   font-family: "Roboto", helvetica, arial, sans-serif;
   text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
   text-transform:uppercase;
   margin-left: 100px;
}


/*** Table Styles **/

.table-fill {
  background: white;
  border-radius:3px;
  border-collapse: collapse;
  height: 320px;
  margin: auto;
  max-width: 600px;
  padding:5px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;
}
 
th {
  color:#D5DDE5;;
  background:#1b1e24;
  border-bottom:4px solid #9ea7af;
  border-right: 1px solid #343a45;
  font-size:23px;
  font-weight: 100;
  padding:24px;
  text-align:left;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
}

th:first-child {
  border-top-left-radius:3px;
}
 
th:last-child {
  border-top-right-radius:3px;
  border-right:none;
}
  
tr {
  border-top: 1px solid #C1C3D1;
  border-bottom-: 1px solid #C1C3D1;
  color:#666B85;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}
 
tr:hover td {
  background:#4E5066;
  color:#FFFFFF;
  border-top: 1px solid #22262e;
}
 
tr:first-child {
  border-top:none;
}

tr:last-child {
  border-bottom:none;
}
 
tr:nth-child(odd) td {
  background:#EBEBEB;
}
 
tr:nth-child(odd):hover td {
  background:#4E5066;
}

tr:last-child td:first-child {
  border-bottom-left-radius:3px;
}
 
tr:last-child td:last-child {
  border-bottom-right-radius:3px;
}
 
td {
  background:#FFFFFF;
  padding:20px;
  text-align:left;
  vertical-align:middle;
  font-weight:300;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}

td:last-child {
  border-right: 0px;
}

th.text-left {
  text-align: left;
}

th.text-center {
  text-align: center;
}

th.text-right {
  text-align: right;
}

td.text-left {
  text-align: left;
}

td.text-center {
  text-align: center;
}

td.text-right {
  text-align: right;
}

	</style>
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
<body>
<div id="div1">
	<img src="m1.jpg" width="100%" height="700">
	<div style="background-color: black;opacity: 0.5;margin-left: 385px;margin-top: -500px;position: absolute;width: 500px;height: 300px;">
	</div>
	<h1 style="margin-top: -470px;margin-left: 520px;color: white;position: absolute;font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;">Welcome to </h1>
	<h1 style="margin-top: -420px;margin-left: 500px;color: white;position: absolute;font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;"> the Motivational</h1>
	<h1 style="margin-top: -370px;margin-left: 520px;color: white;position: absolute;font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;">Section of FIB</h1>
	<p style="font-size: 20px;font-weight: 1700;color: white;margin-top: -305px;position: absolute;margin-left: 600px;font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;"> Click </p>
	<p style="font-size: 70px;font-weight: 1700;color: white;margin-top: -300px;position: absolute;margin-left: 600px;"><a href="#div2" class="a" style="color: white;text-decoration: none;"> ↓ </a></p>
</div>

<div id="div2" style="background-color: grey;width: 100%;height: 650px;position: absolute;">
	<img src="m2.jpg" width="100%" height="600px">
	<div style="background-color: black;opacity: 0.5;margin-left: 40px;margin-top: -500px;position: absolute;width: 1150px;height: 400px;"></div>
	<div style="width: 1050px;height: 300px;background-color: #101010;position: absolute;margin-top: -450px;margin-left: 100px;">
		<button onclick="cal(-1);" style="width: 100px;height: 50px;margin-left: -70px;margin-top: 100px;background-color: transparent;font-size: 50px;position: absolute;"><</button>
<button onclick="cal(1);" style="width: 100px;height: 50px;margin-left: 1030px;margin-top:100px;background-color: transparent;font-size: 50px;position: absolute;">></button>
		<h1 style="color: white;font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;margin-left: 200px;">Fight against everything that breaks you</h1>
			<p style="color: white;font-size: 20px;font-family: 'Helvetica Neue',Helvetica;padding: 30px;" class="im1">I once read a quote that summarizes depression and anxiety perfectly. <b style="color: red;">“</b>Some days I feel everything at once. Other days, I feel nothing at all. I don’t know what’s worse; drowning beneath the waves or dying from the thirst.<b style="color: red;">”</b> But it isn’t until you realize that <b style="color: green;"> the true monster doesn’t live under your bed, but inside your head.</b> </p>
			<p style="color: white;font-size: 20px;font-family: 'Helvetica Neue',Helvetica;padding: 30px;" class="im1">Jay Lowder overcame depression by finding God.
He was 21 when everything went south. <b style="color: red;">He was dumped, he lost his car and he found himself unemployed all at once.</b>
Things took a dark turn for Lowder. But with the help of his roommate, and religion, he overcome his struggle with depression.
He was invited to an event hosted by a preacher, and it was there that <b style="color: green;"> he rediscovered his faith in God and religion. </b> It has helped him grow his faith as an evangelist.</p>
<p style="color: white;font-size: 20px;font-family: 'Helvetica Neue',Helvetica;padding: 30px;" class="im1">We focus so much on our <b style="color: red;">differences</b>, and that is creating, I think, a lot of chaos and negativity and bullying in the world. And I think if everybody focused on what we all have in common - which is -<b style="color: green;"> we all want to be happy.</b> </p>
<p style="color: white;font-size: 20px;font-family: 'Helvetica Neue',Helvetica;padding: 30px;" class="im1"><b style="color: red;">Nothing lasts forever</b>; everything you experience, every hardship and ordeal is a part of a master-plan intended to teach you something, or lead you somewhere. As hard as today maybe it will end, and there will be a tomorrow to look forward to. <b style="color: green;">You just need the foresight and faith to see it</b>.</p>
	</div>
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
	<p style="font-size: 70px;font-weight: 1700;color: white;margin-top: -200px;position: absolute;margin-left: 1200px;"><a href="#div3" class="a" style="color: white;text-decoration: none;"> ↓ </a></p>
</div>

<div style="width: 100%;height: 600px;background-color: black;position: absolute;margin-top: 600px;" id="div3">
	<img src="m3.jpg" width="100%" height="600px">
	<h1 style="color: white;font-size: 40px;font-family: 'Kaushan Script','Helvetica Neue',Helvetica;margin-left: 250px;position: absolute;margin-top: -570px;">WAIT HERE FOR FEW SECONDS AND READ IT.</h1>
	<div style="background-color: white;opacity: 0.5;margin-left: 135px;margin-top: -500px;position: absolute;width: 300px;height: 400px;">
	</div>
	<img src="7.jpg" width="250px" height="350px" style="margin-left: 160px;margin-top: -475px;position: absolute;">
	<img src="1.jpg" width="250px" height="350px" style="margin-left: 160px;margin-top: -475px;position: absolute;" class="im">
	<img src="4.jpg" width="250px" height="350px" style="margin-left: 160px;margin-top: -475px;position: absolute;" class="im">
	<div style="background-color: black;opacity: 0.5;margin-left: 535px;margin-top: -500px;position: absolute;width: 300px;height: 400px;">
	</div>
	<img src="8.jpg" width="250px" height="350px" style="margin-left: 560px;margin-top: -475px;position: absolute;">
	<img src="2.jpg" width="250px" height="350px" style="margin-left: 560px;margin-top: -475px;position: absolute;" class="im">
		<img src="5.jpg" width="250px" height="350px" style="margin-left: 560px;margin-top: -475px;position: absolute;" class="im">
	<div style="background-color: white;opacity: 0.5;margin-left: 935px;margin-top: -500px;position: absolute;width: 300px;height: 400px;">
	</div>
	<img src="9.jpg" width="250px" height="350px" style="margin-left: 960px;margin-top: -475px;position: absolute;">
	<img src="3.jpg" width="250px" height="350px" style="margin-left: 960px;margin-top: -475px;position: absolute;" class="im">
	<img src="6.jpg" width="250px" height="350px" style="margin-left: 960px;margin-top: -475px;position: absolute;" class="im">
	<p style="font-size: 70px;font-weight: 1700;color: white;margin-top: -150px;position: absolute;margin-left: 1270px;"><a href="#div4" style="color: white;text-decoration: none;" class="a"> ↓ </a></p>
</div>
	<script type="text/javascript">
	var count=0;
	f1();
	function f1(){
		var x=document.getElementsByClassName('im');
		for(var i=0;i<x.length;i++){
			x[i].style.display='none';
		}
		count++;
		if(count>x.length){
			count=1;
		}
		x[count-1].style.display="block";
		setTimeout(f1,4000);
	}
</script>
<div id="div4" style="width: 100%;height: 600px;background-color: black;position: absolute;margin-top: 1200px;">
	<img src="m4.jpg" width="100%" height="600px">
	<div style="background-color: white;opacity: 0.5;margin-left: 190px;margin-top: -550px;position: absolute;width: 1000px;height: 480px;">
	</div>
	<div style="margin-top: -610px;position: absolute;margin-left: 450px;">
<div class="table-title">
<h3>Helpline Numbers</h3>
</div>
<table class="table-fill">
<thead>
<tr>
<th class="text-left">Number</th>
<th class="text-left">Department</th>
</tr>
</thead>
<tbody class="table-hover">
<tr>
<td class="text-left">181</td>
<td class="text-left">Women in Distress helpline number (Delhi)</td>
</tr>
<tr>
<td class="text-left">1096</td>
<td class="text-left">Crime Against Women (Delhi)</td>
</tr>
<tr>
<td class="text-left">181</td>
<td class="text-left">Women Helpline</td>
</tr>
<tr>
<td class="text-left">108</td>
<td class="text-left">Medical Helpline</td>
</tr>
<tr>
<td class="text-left">1291</td>
<td class="text-left">Senior Citizen Helpline (New Delhi)</td>
</tr>
</tbody>
</table>
  </div>
</div>
<div style="background-color: black;width: 200px;height: 100px;margin-top: 1350px;position: absolute;margin-left: 220px;border:2px solid white;" id="division">
	<p style="padding: 20px;color: white;font-size: 18px;">DON'T IGNORE ANY WRONG DOING. REPORT IT IMMEDIATELY. CALL 911 IN CASE OF AN EMERGENCY.</p>
</div>
<div style="background-color: black;width: 200px;height: 100px;margin-top: 1350px;position: absolute;margin-left:975px;border:2px solid white;" id="division1">
	<p style="padding: 20px;color: white;font-size: 18px;">IF SOMEONE TRIES TO BULLY YOU ONLINE THEN, PLEASE DON'T IGNORE IT. INSTEAD, REPORT IT RIGHT AWAY.</p>
</div>
	<script type="text/javascript">
$('document').ready(function e(){
    $("#division").animate({height: '+=200px'},4000);
    $("#division").animate({height: '-=200px'},4000);
    window.setTimeout(function() { e() }, 500)
});
$('document').ready(function e(){
    $("#division1").animate({height: '+=200px'},4000);
    $("#division1").animate({height: '-=200px'},4000);
    window.setTimeout(function() { e() }, 500)
});
</script> 
</body>
</html>
<?php
include 'footer.php';
echo "<style>"."footer{margin-top:1800px;}"."</style>";
?>