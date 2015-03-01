<?php

class Worker {

  function work($n)
  {
    $s = '';

    if($n <= 3)
      while($n-- > 0) { $s .= 'I'; }
    else if($n == 4)
      $s = 'IV';
    else if($n == 5)
      $s = 'V';
    else if($n == 6)
      $s = 'VI';
    else if($n == 7)
      $s = 'VII';
    else if($n == 8)
      $s = 'VIII';
    else if($n == 9)
      $s = 'IX';
    else if($n == 10)
      $s = 'X';
    
    return $s;
  }

}
