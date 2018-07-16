<?php
/**
 * ------------------------------------------
 * Operators
 * ------------------------------------------
 * An operator in a programming language is a symbol that tells the computer to perform specific mathematical,
 * relational or logical operation and produce a final result.
 *
 * ------------------------------------------
 * Arithmetic Operators
 * ------------------------------------------
 * If variables contain integer or float values then we can perform maths with them.
 * add -> +
 * subtract -> -
 * multiply -> *
 * divide -> /
 * brackets -> ()
 *
 * examples :
 */

$a = 2+8;
$a = 8*4;
$a = (2+8)*4;
$a = 8/4;
$a = 8-4;
$b = 5;
$a = $b + 1;
$c = $a + £b;

/**
 * if we want to output any of these variables we can use the print keyword like so:
 */
print "Result: \n";
print $a;
print "\n";
/**
 * we also need to print \n so the it adds a new line to our output, this is purely for display. It makes it more readable.
 */

/**
 * ------------------------------------------
 * EXERCISE TIME!
 * ------------------------------------------
 * now experiment with the different maths operators and moving variables into different places to see how the values change on output.
 */


/**
 * ------------------------------------------
 * Logical Operators
 * ------------------------------------------
 * logical operators allow us to evaluate two values against each other and produce a true/false value.
 * operators :
 * equals                      ==
 * not equals                  !=
 * greater than                >
 * greater than or equal       >=
 * less than                   <
 * less than or equal          <=
 *
 * e.g. $answer will be boolean true
 *
 */

$answer = 5 > 4;

/**
 * logical operators have more use within if statements, because now we can start doing INTERESTING things with the code.
 * we can start making behaviour based on decisions. such as :
 */
$a = 5;
$b = 6;
if( $a == $b ){
    print "value are the same \n";
}else{
    print "value are the different \n";
}

/**
 * ------------------------------------------
 * EXERCISE TIME!
 * ------------------------------------------
 * lets start the beginning of creating a naughts and crosses game. I've added some code for getting input in the cmd line
 * from the user. Create a new php file called game.php and copy the below code into your own php file. Modify it to ask
 * the user for their input : either X or O. write some decisions to check they've entered a valid input otherwise tell them its wrong.
 *
 */
$input = readline("a question of your choice?");

print "You selected: ".$input."\n";

if( $a == "something" ){

}else{

}
/**
 * ADVANCED: if you have completed this, try modifying your code to ask for two player names and assign X and O to each player name, printing
 * out the results.
 */