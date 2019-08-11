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
.mdl-data-table td:first-child {
  text-align: left;
  }
.mdl-data-table td{
  text-align: center;
  }
  .mdl-data-table tr:nth-child(even){
  text-align: center;
  background-color: #EEF2F5;
  }
  .mdl-data-table th:first-child {
  text-align: left;
  }
  .mdl-data-table th{
  text-align: center;
  background-color: #C1C2C2;
  }
.gamename{
  width: 60%;
  height: 80%;
  float: right;
  margin-top: 2%;
}
</style>
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
      <a class="mdl-navigation__link" href="<?php echo "".$_SESSION["class"];?>.php">Dashboard</a>
      <a class="mdl-navigation__link" href="">My Scores</a>
      <a class="mdl-navigation__link" href="Leaderboard.php">Leaderboard</a>
      <a class="mdl-navigation__link" href="index.php"><? php  session_destroy(); ?>Logout</a>
    </nav>
  </div>
  <main class="mdl-layout__content " style="padding-top: 80px;padding-left: 150px">

   <table class="mdl-data-table mdl-shadow--4dp" style="width: 1100px;">
  <thead>
    <tr>
      <th>Game</th>
      <th>Score</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $conn = new mysqli('localhost', 'root', '','merito');
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM`".$_SESSION['email']."`ORDER BY score DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["gameid"]. "</td>";
        echo "<td>".$row["score"]. "</td>";
        echo "</tr>";
    }

    } 
    else
    {
    echo "0 results";
    }
    $conn->close();
    ?>
  </tbody>
</table>
  </main>
</div>
</body>
</html>