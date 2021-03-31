<?php

namespace model;

class FizzBuzz
{
  private $number;
  private static $fizz = 'Fizz';
  private static $buzz = 'Buzz';
  private static $fizzBuzz = 'FizzBuzz';
  private static $start = 1;
  private static $stop = 100;

  /**
   * Constructor
   * @param int $number default set to null
   */
  public function __construct(int $number = null)
  {
    $this->number = $number;
  }

  /**
   * Is Fizz?
   *
   * @return boolean - true if Fizz
   */
  private function isFizz()
  {
    return $this->number % 3 == 0;
  }

  /**
   * Is Buzz?
   *
   * @return boolean - true if Buzz
   */
  private function isBuzz()
  {
    return $this->number % 5 == 0;
  }

  /**
   * Is FizzBuzz?
   *
   * @return boolean - true if fizzBuzz
   */
  private function isFizzBuzz()
  {
    return $this->number % 3 == 0 && $this->number % 5 == 0;
  }

  /**
   * Calculate Number
   *
   * Calculates just one number - if it is Fizz, Buzz or FizzBuzz
   *
   * @return string - the result (Fizz, Buzz, FizzBuzz or the number)
   */
  public function calculateNumber()
  {
    if ($this->isFizzBuzz()) {
      return self::$fizzBuzz;
    } else if($this->isFizz()) {
      return self::$fizz;
    } else if ($this->isBuzz()) {
      return self::$buzz;
    } else {
      return (string)$this->number;
    }
  }

  /**
   * Calculate Range
   *
   * For multiples of three - returns "Fizz" instead of the number.
   * For the multiples of five - returns "Buzz" instead of the number.
   * For numbers that are BOTH three and five - returns "FizzBuzz"!
   *
   * @return string - the result (Fizz, Buzz, FizzBuzz or the number from 1-100)
   */
  public function calculateRange()
  {
    $result = '';

    foreach(range(self::$start, self::$stop) as $number) {

      if($number % 3 == 0 && $number % 5 == 0) {

        $result .= self::$fizzBuzz . '</br>';

      } else if($number % 3 == 0) {

        $result .= self::$fizz . '</br>';

      } else if($number % 5 == 0) {

        $result .= self::$buzz . '</br>';

      } else {

        $result .= (string)$number . '</br>';
      }
    }
      return $result;
  }
}
