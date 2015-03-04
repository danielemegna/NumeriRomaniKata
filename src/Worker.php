<?php

class Worker {

  function work($n)
  {
    if($n >= 1 && $n <= 3)
      return $this->workWithAPivot($n, 0, '');

    $nPlusOneDividedBy5 = floor(($n+1) / 5);

    // $n+1 div 5 = 1 ---> odd
    if($nPlusOneDividedBy5 == 1)
      return $this->workWithAPivot($n, 5, 'V');

    // $n+1 div 5 = 2 ---> even
    if($nPlusOneDividedBy5 == 2)
      return $this->workWithAPivot($n, 10, 'X');

    // $n+1 div 5 = 3 ---> odd
    if($nPlusOneDividedBy5 == 3)
      return 'X' . $this->workWithAPivot($n, 15, 'V');

    // $n+1 div 5 = 4 --> even
    if($nPlusOneDividedBy5 == 4)
      return 'X' . $this->workWithAPivot($n, 20, 'X');

    // $n+1 div 5 = 5 --> odd
    if($nPlusOneDividedBy5 == 5)
      return 'XX' . $this->workWithAPivot($n, 25, 'V');

    // $n+1 div 5 = 6 --> even
    if($nPlusOneDividedBy5 == 6)
      return 'XX' . $this->workWithAPivot($n, 30, 'X');

    // $n+1 div 5 = 7 --> odd
    if($nPlusOneDividedBy5 == 7)
      return 'XXX' . $this->workWithAPivot($n, 35, 'V');

    // $n+1 div 5 = 8 --> even
    if($nPlusOneDividedBy5 == 8)
      return 'XXX' . $this->workWithAPivot($n, 40, 'X');

    // $n+1 div 5 = 9 --> odd
    if($nPlusOneDividedBy5 == 9)
      return 'XL' . $this->workWithAPivot($n, 45, 'V');

    // $n+1 div 5 = 10 --> even
    if($nPlusOneDividedBy5 == 10)
      return $this->workWithAPivot($n, 50, 'L');
  }

  function workWithAPivot($n, $pivotValue, $pivotRappresentation)
  {
    if($n < $pivotValue)
      return 'I' . $pivotRappresentation;
      
    if($n == $pivotValue)
      return $pivotRappresentation;

    $s = $pivotRappresentation;
    while($n-- > $pivotValue) { $s .= 'I'; }

    return $s;
  }

}
