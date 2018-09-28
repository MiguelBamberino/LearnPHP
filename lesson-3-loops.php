<?php
/**
 * ---------------------------------
 * Loops and lists
 * ---------------------------------
 * Often in programming we want to perform the same repetitive action many times
 * and only stop we certain conditions are met. We do this using a loop. We can 
 * often make use of loops to peform the same action on lists, but we'll get into
 * lists later. Each time we perform 1 loop we call this an iteration. We can also
 * use this as a verb e.g. i want to iterate over this list.
 *
 *----------------------------------
 * Loops
 *----------------------------------
 * So there are three main kinds of loops : while, for and foreach
 *
 * while - i used to run an infinite loop untill some conditions is met. WARNING!
 * many a programmer has crashed their pc by missusing a while (i actually did this in second yr)
 * a while loop looks a bit like an if statement :
 */
  $you_are_a_poop = true;
  $counter =0;
 while($you_are_a_poop == true ){
    $counter = $counter + 1;
    if($counter==100){
      $you_are_a_poop = false;
    }
 }
print "The time has arrived, you are no longer a poop \n";
/**
 * So we can see from this code that we set a starting value for our condition to true,
 * yes you are a poop. Then we will perform the contents of the {} brackets until such a 
 * time that $you_are_a_poop becomes false. Now you can see on every iteration(loop), we
 * increase the value of $counter, so when $counter equals 100 then we should leave the 
 * loop and proceed to print out 
*/

 /* 
 * ------------------------------------------------
 * Lists
 * ------------------------------------------------
 * Often in programming we want to store information in a list, such as a list 
 * names. This has a few benefits:
 *   - we can put all the information in one variable (instead of one for each name)
 *   - we can then move the whole list about our code, keeping the data together 
 *   - we can perform the same block of code on each item in the list using a loop  
 * in php lists are call arrays, and I gave you a demo of them in lesson 0. We will now
 * go into more detail on these. You define and access an array variable the same as others
 * variables using the $ symbol followed by your reference, however unlike other variables
 * such as strings and integers, we must declare the variable as an array first using [] brackets
 * like so :
 */
 $names = [];
 /* you can also define it like this : */
  $names = array(); // which is just an older way of doing it.
 /* The [] brackets are very important when it comes to arrays. We always use them when
  * reference a value within our array our putting a new value into our array.
  * 
  * So lets stat filling our list of names. Like so :
 */
$names[0] = "bob";
$names[1] = "sophie";
$names[2] = "graham";
$names[3] = "susan";
/*
 * You will notice we have used the [] brackets again, but this time we have placed a number inside.
 * the value inside the [] brackets is called the index and much like an isbn number in a library,
 * is the look up reference for that position in the array. An index can also be referred to as a key
 * You will also notice that the numbers start at 0 rather than 1, there is a reason for this but 
 * its somewhat lost to the depths of programming history. Each index is unique, so once you have 
 * populated position 2 with the string value "graham", it is fixed and there can only be 1 value 
 * at position 2, which you wanted, could overidden with */
 $names[2] = "mike"; 
 /*
  * If we want to access that variable we would do :
 */
 print $names[2] . " loves " . $names[1] . "\n"
 /*
  *-------------------------------------------
  * Exercise time !
  *-------------------------------------------
  * - try building your own list with 10 items in it
  * - try putting different variable types instead of strings at some positions
  * - what happens when you access an index that doesn't exist ? 
  * - can the index be a negative number ?
  * - what about a decimal number ? (you'll get weird behaviour here...)
  *
  *
  *----------------------------------------
  * Array indexes as strings 
  *----------------------------------------
  * Now you have had a play around with a basic array, lets discuss the index/key. You
  * will have noticed it only works if the index is an integer of zero an above.
  * However you can also use strings for the index like so :
  */
  $products=[];
  $products['XRT345'] = "1kg bag of rice";
  $products['CVE322'] = "1kg bag of pasta";
  $products['LER788'] = "400g of baked beans";
  /*
   * This becomes very useful at giving more meaning to our data and the key we store it with
   * as in the example above we have some product descriptions, indexed by their product code.
   * This can also be useful 
   */
   
   


