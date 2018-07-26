<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="vendor/devicons/css/devicons.min.css" rel="stylesheet">
<link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">


<!-- Custom styles for this template -->
<link href="css/resume.min.css" rel="stylesheet">
<link href="css/bootstrap-reboot.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css" />


<!--<script src="tttgame.js"></script>
<script src="tttstate.js"></script>-->

			<!-- Finally, Load the game client code. -->

	<style>
	
    .menudropdown{
     width: 75%;
	 height:40px;
	 margin:0px auto;
}
		.menudropdown ul{

			padding: 0px;
   }

   .menudropdown ul {
      float:left;
	  background-color:black;
	  color:white;
	  width:10px;
	  height:20px;
	  line-heigth:20px;
	  list-style:none;
}

	
		table,tr, th {    
    border: 1px solid ;
    alignment: center;
	
}

table {
    border-collapse: collapse;
    width: 30%;
	
}

tr,th{
    padding: 5px;
	

	
	
}
	</style>

<script>

</script>
</head>
<body>
	

<!--<script>

	//if(tile=='o' || XO == "x"){
	//	t= Tile.NOUGHT;
	//}
	//else(
	//	t=Tile.CROSS;)

	var canvas, ctx, state, mouse = {x:0, y:0};
window.onload = function main() {
	canvas = document.createElement("canvas");
	canvas.width = canvas.height = 3*120 + 20;
	ctx = canvas.getContext("2d");
	state = new StateManager();
	state.add( new MenuState("menu"), new GameState("game"));
	state.set("menu");
	document.body.appendChild(canvas);
	canvas.addEventListener("mousemove", mouseMove, false);
	init();
	tick();
}

function init() {
	state.get("game").init(true);
}

function tick() {
	window.requestAnimationFrame(tick);
	ctx.clearRect(0, 0, canvas.width, canvas.height);
	state.tick(ctx);
}
function mouseMove(evt) {
	var el = evt.target;
	var ox = oy = 0;
	do {
		ox += el.offsetLeft;
		oy += el.offsetTop;
	} while (el.parentOffset)
	mouse.x = evt.clientX - ox;
	mouse.y = evt.clientY - oy;
}
</script> -->
<?php include 'navbar.php';?>
<h2>Let's go for the trophy</h2>
<div class = "container" style="padding-left: 25%;">



<table style="height: 70%; width: 70%; align-content: center;" >
  <tr bgcolor="#FF0000">
    <th> 
	<div class ="menudropdown">
	<select>
<option>R</option>
<option>S</option>
<option>P</option>
<option>T</option>
	</select>
		</div>
	</th>
    <th><div class ="menudropdown">
	<select>
<option>R</option>
<option>S</option>
<option>P</option>
<option>T</option>
	</select>
		</div></th>
    <th><div class ="menudropdown">
	<select>
<option>R</option>
<option>S</option>
<option>P</option>
<option>T</option>
	</select>
		</div></th>
	<th><div class ="menudropdown">
	<select>
<option>R</option>
<option>S</option>
<option>P</option>
<option>T</option>
	</select>
		</div></th>
	<th><div class ="menudropdown">
	<select>
<option>R</option>
<option>S</option>
<option>P</option>
<option>T</option>
	</select>
		</div></th>
  </tr>
  <tr bgcolor="#FF0000">
  <th><div class ="menudropdown">
	<select>
<option>R</option>
<option>S</option>
<option>P</option>
<option>T</option>
	</select>
		</div></th>
    <th><div class ="menudropdown">
	<select>
<option>R</option>
<option>S</option>
<option>P</option>
<option>T</option>
	</select>
		</div></th>
    <th><div class ="menudropdown">
	<select>
<option>R</option>
<option>S</option>
<option>P</option>
<option>T</option>
	</select>
		</div></th>
	<th><div class ="menudropdown">
	<select>
<option>R</option>
<option>S</option>
<option>P</option>
<option>T</option>
	</select>
		</div></th>
	<th><div class ="menudropdown">
	<select>
<option>R</option>
<option>S</option>
<option>P</option>
<option>T</option>
	</select>
		</div></th>
    
  </tr>
  <tr bgcolor= "#4CAF50">
  <th><div class ="menudropdown">
	<select>
<option>R</option>
<option>S</option>
<option>P</option>
<option>T</option>
	</select>
		</div></th>
    <th><div class ="menudropdown">
	<select>
<option>R</option>
<option>S</option>
<option>P</option>
<option>T</option>
	</select>
		</div></th>
    <th><div class ="menudropdown">
	<select>
<option>R</option>
<option>S</option>
<option>P</option>
<option>T</option>
	</select>
		</div></th>
	<th><div class ="menudropdown">
	<select>
<option>R</option>
<option>S</option>
<option>P</option>
<option>T</option>
	</select>
		</div></th>
	<th><div class ="menudropdown">
	<select>
<option>R</option>
<option>S</option>
<option>P</option>
<option>T</option>
	</select>
		</div></th>
    
  </tr>
  
  
  <tr bgcolor= "#4CAF50">
  <th><div class ="menudropdown">
	<select>
<option>R</option>
<option>S</option>
<option>P</option>
<option>T</option>
	</select>
		</div></th>
    <th><div class ="menudropdown">
	<select>
<option>R</option>
<option>S</option>
<option>P</option>
<option>T</option>
	</select>
		</div></th>
    <th>
	<div class ="menudropdown">
	<select>
<option>R</option>
<option>S</option>
<option>P</option>
<option>T</option>
	</select>
		</div></th>
	<th><div class ="menudropdown">
	<select>
<option>R</option>
<option>S</option>
<option>P</option>
<option>T</option>
	</select>
		</div></th>
	<th><div class ="menudropdown">
	<select>
<option>R</option>
<option>S</option>
<option>P</option>
<option>T</option>
	</select>
		</div></th>
    
  </tr>
  
  
</table>
</div>


</html>


			

<!--<div class = "row" >
<div class = "col-md-6" style=" padding-left: 5%">


	

//<form class="form-inline mt-2 mt-md-0" method="post" id="chooseOption">
//	<label> Choose: &nbsp; </label>
//<input class="form-control mr-sm-2" type="radio" name="chooseXO" <?php //if ($XO == 'X') { ?> checked='checked' //<?php //} ?> value="X" onClick="autosubmit();" >X &nbsp;
<input class="form-control mr-sm-2" type="radio" name="chooseXO" <?php //if ($XO == 'O') { ?> checked='checked' //<?php //} ?> value="O" onClick="autosubmit();" >O
</form>
</div>-->

		<div class = "" style="padding-left: 25%">
		<form class="form-inline mt-2 mt-md-0" method="post" action="sendmail.php" id="inviteform">
			<input class="form-control mr-sm-2" name="email" type="text" placeholder="Email-Id" aria-label="Email-Id">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Invite</button>
		</form>
	</div>
	</div>


<footer class="footer" style="padding-top: 5%">
<?php include 'footer.php';?>

</footer>
</body>