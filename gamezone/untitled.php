echo successMsg("Congratulations player " . $this->isOver() . ", you've won the game!");
			

			$this->board[$x][$y] = $this->player;
										echo "<img src=\"images/{$this->board[$x][$y]}.png\" alt=\"{$this->board[$x][$y]}\" title=\"{$this->board[$x][$y]}\" />";


										
							