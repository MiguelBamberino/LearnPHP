<?php

$game_turn = 1;
$winner = false;
// keep going untill we find a winner or we've had 9 turns
while($game_turn <= 9 && $winner == false ){
  
  print "\n Game Turn ".$game_turn."\n";
  // ask for player go
  // <insert code for capturing player input
  
  // render game board for this turn
  // <insert code for printing the game board to screen >
  
  $game_turn++;
}
print "Game over! \n"; 