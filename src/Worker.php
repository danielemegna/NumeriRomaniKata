<?php

class Worker {

  function work($n)
  {
    if($n >= 1 && $n <= 3)
      return $this->workWithAPivot($n, 0, '');

    $nPlusOneDividedBy5 = floor(($n+1) / 5);

    // $n+1 div 5 = 1 ---> dispari
    if($nPlusOneDividedBy5 == 1)
      return $this->workWithAPivot($n, 5, 'V');

    // $n+1 div 5 = 2 ---> pari
    if($nPlusOneDividedBy5 == 2)
      return $this->workWithAPivot($n, 10, 'X');

    // $n+1 div 5 = 3 ---> dispari
    if($nPlusOneDividedBy5 == 3)
      return 'X' . $this->workWithAPivot($n, 15, 'V');

    // $n+1 div 5 = 4 --> pari
    if($nPlusOneDividedBy5 == 4)
      return 'X' . $this->workWithAPivot($n, 20, 'X');

    // $n+1 div 5 = 5 --> dispari
    if($nPlusOneDividedBy5 == 5)
      return 'XX' . $this->workWithAPivot($n, 25, 'V');

    // $n+1 div 5 = 6 --> pari
    if($nPlusOneDividedBy5 == 6)
      return 'XX' . $this->workWithAPivot($n, 30, 'X');

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
