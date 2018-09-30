<?php


$board =[];
$board['X1Y1'] = " ";
$board['X2Y1'] = " ";
$board['X3Y1'] = " ";
$board['X1Y2'] = " ";
$board['X2Y2'] = " ";
$board['X3Y2'] = " ";
$board['X1Y3'] = " ";
$board['X2Y3'] = " ";
$board['X3Y3'] = " ";

$player1_mark = "X";
$coord = readline("Player 1 which coord would you like ?");

if( isset($board[$coord]) ){
  
  if($board[$coord] == 'X' || $board[$coord] == 'O'){
    print "Sorry there is already a player mark at this coord \n";
  }else{
    $board[$coord] = $player1_mark;
  }
}else{
  print "Please enter a valid coordinate you nung nung \n";
}

print "------------------------\n";
print "BOARD\n";
print "------------------------\n";
print "Y \n";
print "3 | ".$board['X1Y3']." | ".$board['X2Y3']." | ".$board['X2Y3']." |\n";
print "---------------\n";
print "2 | ".$board['X1Y2']." | ".$board['X2Y2']." | ".$board['X2Y2']." |\n";
print "---------------\n";
print "1 | ".$board['X1Y1']." | ".$board['X2Y1']." | ".$board['X2Y1']." |\n";
print "---------------\n";
print "X | 1 | 2 | 3 |\n";


