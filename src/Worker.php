<?php

class Worker {

  function work($n)
  {
    if($n >= 1 && $n <= 3)
      return $this->workWithAPivot($n, 0, '');

    $nFiveFloor = floor(($n+1) / 5);
    $isFloorOdd = ($nFiveFloor % 2) == 1;
    $pivotRappresentation = $isFloorOdd ? 'V' : 'X';
    $pivotValue = $nFiveFloor * 5;

    $prefix = '';
    if($pivotValue > 10)
      $prefix = $this->work($isFloorOdd ? $pivotValue-5 : $pivotValue-10);

    $result = $prefix . $this->workWithAPivot($n, $pivotValue, $pivotRappresentation);
    if($result == 'XXXXX')
      $result = 'L';

    return $result;
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
