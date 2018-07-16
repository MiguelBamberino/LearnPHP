<?php
/**
 * ----------------------------------------------
 *  Overview
 * ----------------------------------------------
 *
 * All programming languages more or less work the same
 * so most of this information will be applicable in any language.
 * However the following is with the scope of the language PHP.
 *
 * Programming code defines rules for processing data and providing an output.
 * so simplified, this can be broken down to :
 *
 *  Input -> Process -> Output
 *
 * where given some input, then a defined process will be applied to give an output,
 * where different input would produce a "predictable" different output.
 *
 * e.g. 5,3 -> adder(x,y) -> 8
 *
 * ------------------------------------------
 * Language
 * ------------------------------------------
 *
 * to perform these processes we we describe them using code key words and concepts.
 * The concepts are universal to all programming languages. Key words are used to
 * describe concepts and differ between languages. The key words are called *syntax*
 *
 * Concepts
 * --------
 * - Variables
 * - Values
 * - statements
 * - operators
 * - Decisions
 * - loops
 * - arrays/lists
 * - comments
 * - functions
 *
 * Variables - are where we store our data/information we want to process. This is a reference to
 * somewhere on your computers memory.
 * in PHP the keyword for defining a variable is the $ symbol, followed by the name like so :
 */

$age;

/**
 * Values - represent what the piece of data is, e.g. if we are storing age then it could be 28
 * there are different types of values (int,float,string,boolean,null) we'll go into more detail later.
 * in PHP if we wanted to set the value of $age to 28 we would do :
 */
$age = 28;
/**
 * Statement - in code a statement is a self contained line of code which instructs the computer to do something.
 * In PHP these lines are terminated by a ; symbol, which tells your computer to execute the line. For a statement
 * to be valid it must have a semi-colon after it. The two statements below will execute in order; first setting age to
 * 28 then 29.
 */
$age = 28;
$age = 29;
/**
 * operators - are simple mathmatical/logical operations to perform on *values* such as addition or subtraction.
 * example operators : | & + - * = ! = / ...more details later
 * in PHP age will be set to 28:
 */
$age  = 20 + 8;
/**
 * Decisions - are where we can evaluate the values of variables using logical operators to change/decide what set
 * of statements to execute next. In PHP an example of this would be :
 */
if($age < 18){
    $allowed_to_buy = false;
}else{
    $allowed_to_buy = true;
}
/**
 * Loops - are a way of performing a repeated set of statements for some determined amount of loops e.g. if we wanted
 * to print the word hello to the screen 3 times in PHP we would do :
 */
for($i=0;$i<3;$i++){
    print "Hello \n";
}
/**
 * Arrays/lists - are a way of creating a list of values that are logically grouped together, such as a list products. We
 * also store these values inside a variable, but this is of type array. The big advantage of lists are to combine then
 * with loops so that we perform the same action on every item in the list.
 * e.g. in PHP to define an array we do :
 */
$products = [];
$products[0] = "soft drink";
$products[1] = "Beer";
$products[2] = "Cider";
$products[3] = "Beer";
$products[4] = "Wine";
/**
 * Comments - are a way of adding notes to your code for yourself or other programmers, that explain the lines of code,
 *  but will not be executed by PHP.
 *  In PHP you do this with enclosing your comment in /* <comment here> */

/**
 * functions - are a way of encapsulating multiple statements into a module which can be reused in many places of your code
 * such as add(4,5) which will add 4 and 5 together. In PHP say we wanted the script to pause for 1 second we could
 * use the inbuilt sleep function :
 */
sleep(1);

/**
 * Bringing it all together :
 */
print "hmmm...do you have any ID ? \n\n";

sleep(1);
print "<barkeep reads your ID>\n\n";
print "hmmmmmmm.... \n";
sleep(2);

if($allowed_to_buy == true){

    print "great! What can I get for you ? \n";

    for($i=0; $i<count($products); $i++){

        print $i ." - ".$products[$i]."\n";

    }
}else{
    print "Sorry, but you can only buy a soft drink \n";
}
$picked = readline("enter number:");

print "ok i'll get you a .".$picked;


/**
 * ------------------------------------------
 *  RUN this file to see the output of this script
 * ------------------------------------------
 *
 */