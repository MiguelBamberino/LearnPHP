<?php
/**
 * ------------------------------------------
 * Operators
 * ------------------------------------------
 * An operator in a programming language is a symbol that tells the computer to perform 
 * specific mathematical or logical operation and produce a final result.
 *
 * ------------------------------------------
 * Arithmetic Operators
 * ------------------------------------------
 * If variables contain integer or float values then we can perform maths with them.
 * add: +
 * subtract: -
 * multiply: *
 * divide: /
 * brackets: ()
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
$c = $a + $b;

/**
 * if we want to output any of these variables we can use the print keyword like so:
 */
print "Result: \n";
print $a;
print "\n";
/**
 * we also need to print the characters \n so the it adds a new line to our output, this is purely for display. 
 * It makes it more readable.
 */

/**
 * ------------------------------------------
 * EXERCISE TIME!
 * ------------------------------------------
 * now experiment with the different maths operators and moving variables into different places to see how the 
 * values change on output.
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
 * we can start creating behaviours based on decisions. such as :
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
 * ADVANCED: if you have completed this, try modifying your code to ask for two player names and assign X and O to each player name, 
 * printing output the results.
 */

/**
 * ------------------------------------------
 * More Logical Operators
 * ------------------------------------------
 * There are more advanced things you can do within an if statement, you can have multiple clauses within an if statement and we 
 * do this with the OR operator or the AND operator
 *
 * OR   ||
 * AND  &&
 *
 * so we can evaluate multiple things are true before carrying out some code such as :
 */
$a = 6;
$b = 2;
$c = 10;
if( $a > 5 && $b < $c ){

}

/**
 * You could also do :
 */

if($a == 6 || $c == 10 ){
  
}
/**
 * ------------------------------------------
 * EXERCISE TIME!
 * ------------------------------------------
 * experiment with these two operators, maybe modify your original code 
 * to make use of these. Maybe the ||  operator can be used in checking 
 * wheter the user entered a valid input
 *  
 */

/**
 * ------------------------------------------
 * String Operators
 * ------------------------------------------
 * So we've covered maths and logic operators. Maths operators are good with numbers.
 * but what about string ? sure it doesn't make sense to use > on two words e.g.
 * "bob" < "sophie" ....hahaha or is she ;)
 * now because php is awkward, it'll probably give you a true/false answer to that,
 * but most programming languages would explode and not let you use maths operators 
 * on strings.
 * again PHP will lets you do "mike"+"sophie"...try it, you'll probably get 1.
 * 
 * HOWEVER, sometimes we do want to add strings together, but what we want to do is :
 * "mike"+" loves "+"sophie" becomes "mike loves sophie"
 *
 * to do this, is not called addition but concatenation, we concatenate strings together
 * using the dot character like so :
 */
$a = "Mike" . " loves ". "Sophie"."\n";
print $a;

/**
 * We can also do this with variables that hold strings :
 */
$first_name = "Sophie";
$last_name = "Anderton";
$name = $first_name . " " . $last_name ."\n";
print $name;

/**
 * ------------------------------------------
 * EXERCISE TIME!
 * ------------------------------------------
 * experiment with concatenation. PHP will concatenate any variable type whether its string 
 * integer boolean, float etc. Experiment with different variable types to understand how PHP
 * works with this.
 *  
 */





