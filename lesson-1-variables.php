<?php
/**
 * ------------------------------------------
 * Variables & Values
 * ------------------------------------------
 * as discussed variables are *declared* using the $ symbol. This can be done without assigning a value such as :
 */
$name;
/**
 * When you assign/ set a value for a variable you are initialising it such as :
 */
$name = "Asha";
/**
 * This variable now holds a string value of Asha, it can be changed at any point during code execution, which will replace
 * the old value with the new such as :
 */
$name = "Sophie";
/**
 * When defining the value of a variable you must use 1 equal operator. The variable reference on the left side will hold
 * the new value once the statement is executed. The right side defines the value which you wish to put in the variable.
 * The right side can be the value of another variable.
 */

$a = "Santiago";
$b = "Jake";
$name = $b;
/**
 * The value of name will now the value of b. If you change b after, name will be unaffected and still hold the string "Jake"
 */
$b = "Terry";

print "Value of A :".$a."\n";
print "Value of B :".$b."\n";
print "Value of name :".$name."\n";

/**
 * Quick REF :
 * Value Types :
 * integer - a whole number
 * float - a decimal number
 * string - a string of characters, letters, numbers, symbols
 * boolean - true/false
 */

/**
 * In PHP a variable can hold a value of any type and can the type can be changed during the execution of your code
 * as much as you want. So the following code would work :
 */
$data = false;
$data = 5;
$data = "i am a sentence";
$data = 4.5;
print "Value of data :".$data."\n";

/**
 * ------------------------------------------
 *  RUN this file to see the output of this script
 * ------------------------------------------
 *
 */