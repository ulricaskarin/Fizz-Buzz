<?php

namespace model;

class FizzBuzz
{
  private $number;
  private static $fizz = 'Fizz';
  private static $buzz = 'Buzz';
  private static $fizzBuzz = 'FizzBuzz';

  public function __construct(int $number)
  {
    $this->number = $number;
  }

  private function isFizz()
  {
    return $this->number % 3 == 0;
  }

  private function isBuzz()
  {
    return $this->number % 5 == 0;
  }

  private function isFizzBuzz()
  {
    return $this->number % 3 == 0 && $this->number % 5 == 0;
  }

  public function calculate()
  {
    $result = '';

    if ($this->isFizzBuzz()) {
      $result = self::$fizzBuzz;
    } else if($this->isFizz()) {
      $result = self::$fizz;
    } else if ($this->isFizzBuzz()) {
      $result = self::$fizzBuzz;
    } else {
      $result = (string)$this->number;
    }
    return $result;
  }
}
