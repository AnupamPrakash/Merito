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
<script>
  var score=0;
  var gameid;
function divisible()
{
  var a,b;
  var scorea=0;
  a=Math.floor(1+(Math.random())*100000);
  b=Math.floor(2+(Math.random())*10);
  c = confirm("Is "+a+" is divisible by "+b);
  d=a%b;
  if((c && d==0) || (!c && d!=0))
    {
      alert("Correct Response");
      scorea=scorea+4;
    }
  else
    {
      alert("Wrong Response");  
      scorea=scorea-1;
    }
  alert("Your score is "+scorea);
    score+=scorea;
    alert("Your score is "+score);
    gameid=1;
    // Return <?php
    // $db=new mysqli('localhost', 'root', '','merito');
    // $query = "INSERT INTO ".$_POST['email']."(gameid,score) VALUES (1,$score)";
    // $res = mysqli_query($db, $query);  
    // ?>;
}
function profitloss()
{
  var cost,sell,gain,loss,score2=0;
  cost=Math.floor(1+Math.random()*1000);
  sell=Math.floor(1+Math.random()*1000);
  // alert("Cost Price"+cost);
  // alert("Selling Price"+sell);
  if((sell-cost)<0)
  {
    res=prompt("Cost Price of an item is $"+cost+" and Selling Price is $"+sell+".\n Determine the loss % upto 1 decimal places");
    loss=((cost-sell)/cost)*100;
    //alert("Response recorded"+res+"Answer"+loss);
    loss=loss.toPrecision(3);
    if(res==loss)
    {
      alert("Correct Response");
      score2=score2+4;
    }
    else
    {
      alert("Correct Response");
      score2=score2-1;
    }
  
  }
  if((sell-cost)>0)
  {
    res=prompt("Cost Price of an item is $"+cost+" and Selling Price is $"+sell+".\n Determine the gain% upto 1 decimal places");
    gain=((sell-cost)/cost)*100;
    //alert("Response recorded"+res+"Answer"+gain);
    gain=gain.toPrecision(3);
    if(res==gain)
    {
      alert("Correct Response");
      score2=score2+4;
    }
    else
    {
      alert("Wrong Response");
      score2=score2-1;
    }
  
  }
  alert("Your score is "+score2);
    score+=score2;
    alert("Your score is "+score);
    gameid="5_2";
}
function temperature()
{
  var cel,far,res,score3=0;
  var ran = Math.floor(1+(Math.random())*100000);
  if(ran%2==0)
  {
    cel=Math.floor(1+(Math.random())*200);
    far=((cel*9)/5)+32;
    far=Math.round(far);
    res=prompt("Temperature in Celcius: "+cel+"Temperature in Farenheit:");
    if(res==far)
      {
      alert("Correct Response");
      score3=score3+4;
      }
    else
      {
      alert("Wrong Response");
      score3=score3-1;
      }
  }
  else
  {
    far=Math.floor(1+(Math.random())*200);
    cel=((far-32)*5)/9;
    cel=Math.round(cel);
    res=prompt("Temperature in Farenheit: "+far+"Temperature in Celcius:");
    if(res==cel)
      {
      alert("Correct Response");
      score3=score3+4;
      }
    else
      {
      alert("Wrong Response");
      score3=score3-1;
      }
  }
  alert("Your score is "+score3);
  score+=score3;
  alert("Your score is "+score);
  gameid="5_3";
}
function simpleinterest()
{
  var principal,rate,interest,time,res,score4=0;
  principal=Math.floor(1+(Math.random())*10000);
  rate=(1+(Math.random())*10);
  rate=rate.toPrecision(2);
  time=Math.floor(1+(Math.random())*10);
  interest=(principal*rate*time)/100;
  interest=Math.round(interest);
  res=prompt("Principal Amount is:"+principal+"\n"+"Rate of Interest is:"+rate+" per annum"+"\n"+"Time :"+time+" years"+"\n Simple Interest:(in rounded form)")
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
      gameid="5_4";
}
function change()
{
  window.location.replace('5.php');
}
</script>
<?php
$name = $_SESSION["name"];
// $class = $_SESSION["class"];
$score =  20;
$db=new mysqli('localhost', 'root', '','merito');
$query = "UPDATE scoretable SET score = '$score' 
          WHERE name = '$name'";
    $res = mysqli_query($db, $query);  
    if(!$res)
      echo '<script>alert("Not entered");</script>';
    // echo '<script>alert("Error");</script>';
?>
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
      <a class="mdl-navigation__link" href="5.php">Dashboard</a>
      <a class="mdl-navigation__link" href="myscores.php">My Scores</a>
      <a class="mdl-navigation__link" href="Leaderboard.php">Leaderboard</a>
      <a class="mdl-navigation__link" href="index.php"><? php  session_destroy(); unset($_SESSION['username']);?>Logout</a>
    </nav>
  </div>
  <main class="mdl-layout__content " style="padding-top: 80px;padding-left: 150px">
    
    <div class="card"><img src="images/5th/divisibilty.png" class="imag"><div class="gamename" onclick="divisible()"><h2>Test of Divisibility</h2></div></div>
    <div class="card"><img src="images/5th/pl.png" class="imag"><div class="gamename" onclick="profitloss()"><h2>Profit & Loss</h2></div></div>
    <div class="card"><img src="images/5th/temp.png" style="margin-top: 3%" class="imag"><div class="gamename" onclick="temperature()"><h2>Temperature Conversion</h2></div></div>
    <div class="card"><img src="images/5th/si.png" class="imag"><div class="gamename" onclick="simpleinterest()"><h2>Simple Interest</h2></div></div>
  </main>
</div>
</body>
</html>