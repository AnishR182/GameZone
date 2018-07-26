<?php


class tictactoe
{
	var $player = "X";			
	var $board = array();	
	var $totalMoves = 0;			
	var $over;
	var $won;

	
	function tictactoe()
	{

		$this->over = false;
		$this->won = false;
        $this->newBoard();
	}
	
	function newGame()
	{

		$this->over = false;
		$this->won = false;
		
		$this->player = "X";
		$this->totalMoves = 0;
        $this->newBoard();
	}
    
    function newBoard() {
    
		$this->board = array();
        
        for ($x = 0; $x <= 2; $x++)
        {
            for ($y = 0; $y <= 2; $y++)
            {
                $this->board[$x][$y] = null;
            }
        }
    }
	
	function playGame($gamedata)
	{
		if (!$this->isOver() && isset($gamedata['move'])) {
			$this->move($gamedata);
        }
		if (isset($gamedata['newgame'])) {
			$this->newGame();
        }
		$this->displayGame();
	}
	
	function displayGame()
	{
		if (!$this->isOver())
		{
			echo "<table name=\"board\">";
			
			for ($x = 0; $x < 3; $x++)
			{
				echo "<tr>";
				for ($y = 0; $y < 3; $y++)
				{
					echo "<td class=\"board_cell\">";
					
					if ($this->board[$x][$y])
						echo "<img src=\"images/{$this->board[$x][$y]}.png\" alt=\"{$this->board[$x][$y]}\" title=\"{$this->board[$x][$y]}\" />";
					else
					{
						echo "<select name=\"{$x}_{$y}\" >
								<option value=\"\" >
								<option value=\"{$this->player}\"> {$this->player}</option>
							</select>";
						
							
					}
					
					echo "</td>";
				}
				
				
			}
			
			echo "
				<p align=\"center\">
					<input type=\"submit\" name=\"move\" value=\"Take Turn\" /><br/>
					<b>It's player {$this->player}'s turn.</b></p>
			";
		}
		else
		{
			if ($this->isOver() != "Tie")

			{echo $this->successMsg("Congratulations player " . $this->isOver() . ", you've won the game!");
}
				else if ($this->isOver() == "Tie")
				{echo $this->errorMsg("Too bad yu lost " . $this->isOver() . ", lets try again!!");}
			
			session_destroy(); 
				
			echo "<p align=\"center\"><input type=\"submit\" name=\"newgame\" value=\"New Game\" /></p>";
		}
	}
	
	function setxo(){
			echo "<select name=\"{$x}_{$y}\" hidden>
								<option value=\"{$this->player}\" selected> {$this->player}</option>
							</select>";

	}

	function move($gamedata)
	{			

		if ($this->isOver())
			return;

		//remove duplicate entries on the board	
		$gamedata = array_unique($gamedata);
		
		foreach ($gamedata as $key => $value)
		{
			if ($value == $this->player)
			{	
				//update the board in that position with the player's X or O 
				$coords = explode("_", $key);
				$this->board[$coords[0]][$coords[1]] = $this->player;

				//change the turn to the next player
				if ($this->player == "X")
					$this->player = "O";
				else
					$this->player = "X";
					
				$this->totalMoves++;
			}
		}
	
		if ($this->isOver())
			return;
	}
	
	/**
	* Purpose: check for a winner
	* Preconditions: none
	* Postconditions: return the winner if found
	**/
	function isOver()
	{
		
		//top row
		if ($this->board[0][0] && $this->board[0][0] == $this->board[0][1] && $this->board[0][1] == $this->board[0][2])
			return $this->board[0][0];
			
		//middle row
		if ($this->board[1][0] && $this->board[1][0] == $this->board[1][1] && $this->board[1][1] == $this->board[1][2])
			return $this->board[1][0];
			
		//bottom row
		if ($this->board[2][0] && $this->board[2][0] == $this->board[2][1] && $this->board[2][1] == $this->board[2][2])
			return $this->board[2][0];
			
		//first column
		if ($this->board[0][0] && $this->board[0][0] == $this->board[1][0] && $this->board[1][0] == $this->board[2][0])
			return $this->board[0][0];
			
		//second column
		if ($this->board[0][1] && $this->board[0][1] == $this->board[1][1] && $this->board[1][1] == $this->board[2][1])
			return $this->board[0][1];
			
		//third column
		if ($this->board[0][2] && $this->board[0][2] == $this->board[1][2] && $this->board[1][2] == $this->board[2][2])
			return $this->board[0][2];
			
		//diagonal 1
		if ($this->board[0][0] && $this->board[0][0] == $this->board[1][1] && $this->board[1][1] == $this->board[2][2])
			return $this->board[0][0];
			
		//diagonal 2
		if ($this->board[0][2] && $this->board[0][2] == $this->board[1][1] && $this->board[1][1] == $this->board[2][0])
			return $this->board[0][2];
			
		if ($this->totalMoves >= 9)
			return "Tie";
	}


	function errorMsg($msg)
{
	return "<div class=\"errorMsg\">$msg</div>";
}

/**
* Purpose: return a formatted success message
* Preconditions: the message to format
* Postconditions: formatted message is returned
**/
function successMsg($msg)
{
	return "<div class=\"successMsg\">$msg</div>";
}
}