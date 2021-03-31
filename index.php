<?php
/**
 * Mission:
 * Write a program that prints the integers from 1 to 100.
 * For multiples of three - print "Fizz" instead of the number.
 * For the multiples of five - print "Buzz" instead of the number.
 * For numbers that are BOTH three and five - print "FizzBuzz"!
 */
define("ROOT_PATH", dirname(__FILE__));
require_once(ROOT_PATH .'/app/_config/_autoload.php');

/**
 * The OOP Implementation
 * Creates new FizzBuzzGame
 * Calls on the method Calculate with a number as argument.
 * Result is echoed out.
 * @var model
 */
$fizzBuzzGame = new model\FizzBuzz(15);
$result = $fizzBuzzGame->calculate();
echo $result; // Result = FizzBuzz!

/**
 * The Procedural Implementation
 * This Function goes through all numbers - range 1-100
 * and echos out the result (i.e 1,2,Fizz,4,Buzz,Fizz,7,8,Fizz... etc)
 * @return [type] [description]
 */
function fizzBuzz() {
  foreach (range(1, 100) as $number) {

    if($number % 3 == 0 && $number % 5 == 0) {
      echo 'FizzBuzz!</br>';
    } else if($number % 3 == 0) {
      echo 'Fizz</br>';
    } else if($number % 5 == 0) {
      echo 'Buzz</br>';
    } else {
      echo $number.'</br>';
    }
  }
}

fizzBuzz();
