<?php
require_once 'server.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Merito</title>
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>
<!-- Uses a transparent header that draws on top of the layout's background -->
<style>
.demo-layout {
 background: url('images/headerbg.jpg') center / cover;
}
.demo-layout .mdl-layout__header,
.demo-layout-waterfall .mdl-layout__drawer-button,
.demo-header {
  /* This background is dark, so we set text to white. Use 87% black instead if
     your background is light. */
     background-color: #303132;
  color: white;
}
.features{
  background-color: #EBECEE;
  color: black;
  margin: 10px;
  font-size: 20px;
  border-radius: 2px;
  position: relative;
  height: 300px;
  opacity: 0.8;
  width: 100%
  text-indent: 250px;
  padding: 40px;
  padding-bottom: 20px;
}
.card
{
  height: 200px;
  width: 80%;
  border: 5 px solid black;
  background-color: #EBECEE;
  padding: 25px;
  margin: 10px;
  margin-left: 30px;
  margin-bottom: 20px;  
  border-radius: 300px;
}
.card:hover{
     box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
     cursor: pointer;
}
.imag{
  width: 20%;
  height: 20%
  border-radius: 100px;
  padding-left: 10%
}
#image{
height: 40px;
width: 40px;
border-radius: 20px;
border:2px solid white;
margin-left:75%;
margin-top: 0.3%; 
position: absolute;
}
h2{
  color: blue;
  margin: 60px;

}
.gamename{
  width: 60%;
  height: 80%;
  float: right;
  margin-top: 2%;
}
</style>
<script type="text/javascript">
var score=0;
var gameid;
function ratio()
{
  var score1=0;
a=Math.floor(1+Math.random()*1000);
b=Math.floor(a+Math.random()*1000);
d=(a/b);
d=d.toPrecision(1);
c=prompt("Enter ratio of"+a+" and"+b+"(in absolute value)");
if(c==d)
{
  alert("Correct Response");
  score1=score1+4;
  score=score+4;
}
else
{
  alert("Wrong Response"+d);
  score1=score1-1;
  score=score-1;
}
gameid="6_1";
}
function common()
{
  var score2=0;
a=Math.floor(1+Math.random()*1000);
b=Math.floor(a+Math.random()*1000);
c=prompt("Enter HCF of"+a+" and"+b);
while(a!==b)
{
if(a>b)
  a=a-b;
else
  b=b-a;
}
// alert(a+"&"+c);
if(c==a)
{
  alert("Correct Response");
  score2=score2+4;
  score=score+4;
}
else
{
  alert("Wrong Response");
  score2=score2-1;
  score=score-1;
}
gameid="6_3";
alert("Game over");
}
function ci()
{
  var principal,rate,interest,time,res,score4=0;
  principal=Math.floor(1+(Math.random())*10000);
  rate=(1+(Math.random())*10);
  rate=rate.toPrecision(2);
  time=Math.floor(1+(Math.random())*10);
  interest=principal*(Math.pow((1+(rate/100)),time));
  interest=Math.round(interest);
    // alert(interest);
  res=prompt("Principal Amount is:"+principal+"\n"+"Rate of Interest is:"+rate+" per annum"+"\n"+"Time :"+time+" years"+"\n Total Amount:(in rounded form)")
  if(res==interest)
    {
      alert("Correct Response");
      score=score+4;
    }
  else
    {
      alert("Wrong Response");
      score4=score4-1;
    }
    alert("Your score is "+score4);
      score+=score4;
      alert("Your score is "+score);
      gameid="6_4";
}
</script>
<body>
<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--waterfall">
      <header class="demo-header mdl-shadow--8dp" >
        <div class="mdl-layout__header-row">   <!-- Title -->
          <span class="mdl-layout-title" style="color: white;" >Merito</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
          <button class="mdl-button mdl-js-button" style="margin-top: 0.5%;margin-left: 1%;color: white" id="username" onclick="change()"><?php echo "".$_SESSION["name"];?></button>
        <a class="mdl-navigation__link" href="index.php"><i class="material-icons">home</i></a>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title" id="usertitle"><?php echo "".$_SESSION["name"];?></span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="">Dashboard</a>
      <a class="mdl-navigation__link" href="myscores.php">My Scores</a>
      <a class="mdl-navigation__link" href="Leaderboard.php">Leaderboard</a>
      <a class="mdl-navigation__link" href="index.php"><? php header("location:index.php");exit();?>Logout</a>
    </nav>
  </div>
  <main class="mdl-layout__content " style="padding-top: 80px;padding-left: 150px">
    
    <div class="card"><img src="images/6th/Mensuration.png" class="imag" style="width: 30%;height: 91%"><div class="gamename"><h2>Mensuration</h2></div></div>
    <div class="card"><img src="images/6th/ratio.png" class="imag"><div class="gamename" onclick="ratio()"><h2>Ratio & Proportion</h2></div></div>
    <div class="card"><img src="images/6th/fnm.png" style="margin-top: 0%" class="imag"><div class="gamename" onclick="common()"><h2>Common Factors</h2></div></div>
    <div class="card"><img src="images/6th/ci.png" class="imag"><div class="gamename" onclick="ci()"><h2>Compound Interest</h2></div></div>
  </main>
</div>
</body>
</html>