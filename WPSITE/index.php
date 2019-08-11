<!-- <!DOCTYPE html> -->
<html>
<head>
	<title>Merito</title>
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="path_to/getmdl-select/getmdl-select.min.css">
<script defer src="path_to/getmdl-select/getmdl-select.min.js"></script>
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>
<!-- Uses a transparent header that draws on top of the layout's background -->
<style>
.demo-layout {
  background: url('images/headerbg.jpg') center / cover;
}
.demo-layout .mdl-layout__header,
.demo-layout-transparent .mdl-layout__drawer-button {
  /* This background is dark, so we set text to white. Use 87% black instead if
     your background is light. */
     background-color: #ffffff;
  color: white;
}
.know1
{
  position: relative;
  left: 150px;
  color: black;
  height: 20px;
  width: 800px;
  padding-top: 50px;
  font-size: 30px;
  padding-left: 50px; 
}
.know2
{
  position: relative;
  left: 150px;
  color: black;
  height: 20px;
  width: 800px;
  padding-top: 50px;
  font-size: 30px;
  padding-left: 50px; 
  font-size: 25px;

}
.features{
  background-color: #EFF0F1;
  color: black;
  margin: 10px;
  font-size: 20px;
  border-radius: 2px;
  position: relative;
  height: 300px;
  opacity: 0.8;
  width: 100%
  text-indent: 250px;
  padding: 10px;
  padding-bottom: 20px;
}
.features:hover {
  opacity: 1;
}
.card
{
  height: 80%;
  width: 19%;
  border: 5 px solid black;
  background-color: #55DFDD;
  margin: 10px;
  padding: 25px;
  float: left;
}
.card:hover{
     box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}
</style>
<script type="text/javascript">
  function pl()
  {
    v.play();
  }
</script>
<body ONLOAD="pl()">
<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--waterfall">
      <header class="demo-header mdl-shadow--8dp">
        <div class="mdl-layout__header-row">   <!-- Title -->
          <span class="mdl-layout-title" style="color: white;">Merito</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="">Home</a>
        <a class="mdl-navigation__link" href="#login">Login</a>
      </nav>
    </div>
  </header>
  <main class="mdl-layout__content ">
    <div class="features mdl-shadow--8dp" style="opacity: 1;overflow:hidden;padding: 0">
       <img src="images/puzzle.jpg" style="width: 50%;margin-left: 0%;height: 100%"><img src="images/puzzle.jpg" style="width: 50%;margin-left: 50%;height: 110%;margin-top: -24.7%;margin-right: 0%">
       <!-- <video src="video.mp4" autoplay="autoplay" width="1580" id="v"></video> -->
    </div>
    <div class="features mdl-shadow--8dp">
       <div class="know1">
       Judge your preparation with simple games
       </div>
       <div class="know2">
       <i class="material-icons">done</i> Where you stand
       <br><br>
       <i class="material-icons"> done</i> What next to do
       </div>
       <div><img src="images/stair.jpg" style="height: 328px;width: 385px;position: absolute;margin-top: -150px;margin-left: 70%"></div>
    </div>
    <div class="features mdl-shadow--8dp" style="padding-left: 3%">
       <div class="card"><img src="images/table.png" style="width: 80%;margin-left: 12%"><br><h4 style="margin-left: 12%">Variety of Games</h4></div><div class="card"><img src="images/compare.png" style="width: 80%;margin-left: 12%"><br><h4 style="margin-left: 1%">Comparative Analysis</h4></div>
       <div class="card"><img src="images/game.png" style="width: 80%;margin-left: 12%"><br><h4 style="margin-left: 3%">Add Fun to Learning</h4></div><div class="card"><img src="images/graph.png" style="width: 80%;margin-left: 12%"><br><h4 style="margin-left: 12%">Review your growth</h4></div>
    </div>
    <!-- <div class="features mdl-shadow--8dp" style="height: 800px;"> -->
      <section id="login">

       <div class="features mdl-shadow--16dp" style="height: 600px;width: 50%;margin: auto;margin-top: 5%;margin-bottom: 5%;padding: 0%;border-radius: 2%">
        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
  <div class="mdl-tabs__tab-bar">
      <a href="#login" class="mdl-tabs__tab is-active">Login</a>
      <a href="#register" class="mdl-tabs__tab">Register</a>
  </div>
        
  <div class="mdl-tabs__panel is-active" id="login">
<form  action="/WPSITE/server.php" method="post" style="padding: 25%">
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" type="email" name="email" required="true">
          <label class="mdl-textfield__label" for="sample3">Email</label>
          </div>
          <br>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" type="password" name="password" required="true" size="10">
          <label class="mdl-textfield__label" for="sample3">Password</label>
          </div>
          <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored" style="margin-left: 70%" name="login_user" type="submit">
         <i class="material-icons">send</i>
          </button>
          <br>
        </form>
  </div>
  <div class="mdl-tabs__panel" id="register">
    <form  action="/WPSITE/server.php" method="post" style="margin-top: 15%;margin-left: 25%">
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" type="name" name="name" required="true">
          <label class="mdl-textfield__label" for="sample3">Name</label>
          </div>
          <br>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" type="password" name="password" required="true">
          <label class="mdl-textfield__label" for="sample3">Password</label>
          </div>
           <!-- Select with floating label and arrow -->
           <br>
           <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height">
            <select name="class" class="mdl-textfield__input">
              <option value="5">5th</option>
              <option value="6">6th</option>
              <option value="7">7th</option>
              <option value="8">8th</option>
              <option value="9">9th</option>
            </select>
             <label class="mdl-textfield__label" for="octane">Class</label>
            </div>
            <br>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" type="email" name="email" required="true">
          <label class="mdl-textfield__label" for="sample3">Email</label>
          </div>  
          <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored" style="position: relative;margin-left: 70%" name="reg_user" type="submit">
         <i class="material-icons">add</i>
          </button>
           <br>
        </form>
  </div>     
       </div>
       </section>
    <!-- </div> -->
  </main>
</div>
</body>
</html>