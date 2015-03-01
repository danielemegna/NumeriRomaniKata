<?php

class Worker {

  function work($n)
  {
    $s = '';

    if($n >= 1 && $n <= 3)
      return $this->workWithAPivot($n, 0, '');
    
    if($n >= 4 && $n <= 8)
      return $this->workWithAPivot($n, 5, 'V');

    if($n >= 9)
      return $this->workWithAPivot($n, 10, 'X');
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
