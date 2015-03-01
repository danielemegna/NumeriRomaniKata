<?php

class Worker {

  function work($n)
  {
    if($n >= 1 && $n <= 3)
      return $this->workWithAPivot($n, 0, '');
    
    if($n >= 4 && $n <= 8)
      return $this->workWithAPivot($n, 5, 'V');

    if($n >= 9 && $n <= 13)
      return $this->workWithAPivot($n, 10, 'X');

    if($n >= 14 && $n <= 18)
      return 'X' . $this->workWithAPivot($n, 15, 'V');

    if($n >= 19 && $n <= 20)
      return 'X' . $this->workWithAPivot($n, 20, 'X');
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
