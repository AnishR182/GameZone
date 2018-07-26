/*function UserState(name){
	this.name=name;
	vae scene = new Scene(canvas.width, canvas.height),
	ctx = scene.getContext();

	var btns=[], angle=0, frames=0;

	var yPos = 100;
	btns.push(new MenuButton ("Invite", 120, _ypos, function(){
		state.get("menu");
		state.change("menu");
	}));

	this.render = function(_ctx) {
		ctx.clearRect(0, 0, canvas.width, canvas.height);

		ctx.save();
		ctx.translate(190, 40);
		//ctx.rotate(angle);
		ctx.font = "40px Helvetica";
		ctx.fillStyle = "#BD5D38";
		var txt = "Enter Email Id";
		ctx.fillText(txt, -ctx.measureText(txt).width/2, 18);
		ctx.restore();



		for (var i = btns.length;i--;) {
			btns[i].draw(ctx);
		}

		if (_ctx) { 
			scene.draw(_ctx);
		} else {
			return scene.getCanvas();
		}
	}

}*/
function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}

function Redirect_to_game(str)
{
	var user = getUrlVars()["pname"];
    window.location="tictactoe.php?pname="+user+"&game="+str;
}

function createRequestObject() {
var ro;
ro = new XMLHttpRequest();
return ro;
}





function MenuState(name) {

	this.name = name;
	var scene = new Scene(canvas.width, canvas.height),
		ctx = scene.getContext();

	var btns = [], sign = '', str='host', frames = 0;

	var _yPos = 100;
	btns.push(new MenuButton("X", 120, _yPos, function() {
		sign='X';
		xmlhttp=new XMLHttpRequest();
		
  		
		state.get("game").init(true);
		state.change("game");
		game_start();
		xmlhttp.open("GET","tttsession.php?pname="+str+'&hsign='+sign,true);
		xmlhttp.send();
		
	}));

	btns.push(new MenuButton("O", 120, _yPos+70, function() {
		sign='O';
		xmlhttp=new XMLHttpRequest();
		xmlhttp.open("GET","tttsession.php?pname="+str+'&hsign='+sign,true);
		xmlhttp.send();

		state.get("game").init(false);
		state.change("game");
		game_start();
	}));


	this.update = function() {
		frames++;
		angle = 0.2*Math.cos(frames*0.02);
	}

	this.render = function(_ctx) {
		ctx.clearRect(0, 0, canvas.width, canvas.height);

		ctx.save();
		ctx.translate(190, 40);
		//ctx.rotate(angle);
		ctx.font = "40px Helvetica";
		ctx.fillStyle = "#BD5D38";
		var txt = "Choose";
		ctx.fillText(txt, -ctx.measureText(txt).width/2, 18);
		ctx.restore();

		for (var i = btns.length;i--;) {
			btns[i].draw(ctx);
		}

		if (_ctx) { 
			scene.draw(_ctx);
		} else {
			return scene.getCanvas();
		}
	}
}


function GameState(name) {

	this.name = name;
	var scene = new Scene(canvas.width, canvas.height),
		ctx = scene.getContext();

	var data, player, p2, mode, winner, winnerMsg, hastick;

	canvas.addEventListener("mousedown", function(evt) {
		if (winnerMsg && state.active_name === "game") {
			state.change("menu", true);
			return;
		}
		if (  winner  || !hastick) return;

		var px = mouse.x;
		var py = mouse.y;

		if (px % 120 >= 20 && py % 120 >= 20) {
			var idx = Math.floor(px/120);
			idx += Math.floor(py/120)*3;

			if (data[idx].hasData()) {
				return;
			}
			data[idx].flip(player);
			
			player = player === Tile.NOUGHT ? Tile.CROSS : Tile.NOUGHT;
			
		}
	}, false);

	this.init = function(_tile) {

		//tile = _tile;
		data = [];

		for (var i = 0; i < 9; i++) {
			var x = (i % 3)*120 + 20;
			var y = Math.floor(i/3)*120 + 20;
			data.push(new Tile(x, y));
		}

		player = (_tile === true ? Tile.CROSS : Tile.NOUGHT);

		winnerMsg = false;
		hastick = false;

		p2 = new Player(data);
		p2.setSeed(player === Tile.NOUGHT ? Tile.CROSS : Tile.NOUGHT);

		var boardpattern=0;
		for (var i = data.length;i--;) {
			if (data[i].equals(player)) {
				boardpattern = boardpattern + 1;
			}
			else if (data[i].equals(p2)) {
				boardpattern = boardpattern + 2;
			}
			boardpattern =boardpattern * 10;
		}


		xmlhttp=new XMLHttpRequest();
		xmlhttp.open("GET","tttsession.php?boardpattern="+boardpattern,true);
		xmlhttp.send();


	}

	this.update = function() {
		if (winnerMsg) return;
		var activeAnim = false;
		for (var i = data.length; i--;) {
			data[i].update();
			activeAnim = activeAnim || data[i].active();
		}
		if (!activeAnim) {
			winner = p2.hasWinner();
			
			if (winner === true){
				winnerMsg = "The game was a draw!";
			}
			else if (winner === Tile.CROSS) {
				winnerMsg = "The Cross player won!";
			} else if (winner === Tile.NOUGHT) {
				winnerMsg = "The Nought player won!";
			}
		}
		hastick = true;
	}

	this.render = function(_ctx) {

		ctx.clearRect(0, 0, canvas.width, canvas.height);

		for (var i = data.length; i--;) {
			data[i].draw(ctx);
		}
		if (winnerMsg) {
			var s = 10, lw = 2, w = 300, h = 80;

			w -= lw;
			h -= lw;

			ctx.save();
			ctx.translate((canvas.width - w + lw)/2, (canvas.height - h + lw)/2);
			ctx.fillStyle = "white";
			ctx.strokeStyle = "#BD5D38";
			ctx.lineWidth = lw;
			ctx.font = "20px Helvetica";

			ctx.beginPath();
			ctx.arc(s, s, s, Math.PI, 1.5*Math.PI);
			ctx.arc(w-s, s, s, 1.5*Math.PI, 0);
			ctx.arc(w-s, h-s, s, 0, 0.5*Math.PI);
			ctx.arc(s, h-s, s, 0.5*Math.PI, Math.PI);
			ctx.closePath();

			ctx.fill();
			ctx.stroke();

			ctx.fillStyle = "#BD5D38";
			var txt = winnerMsg;
			ctx.fillText(txt, w/2 -ctx.measureText(txt).width/2, 45);

			ctx.restore();
		}

		if (_ctx) { 
			scene.draw(_ctx);
		} else {
			return scene.getCanvas();
		}
	}
}



