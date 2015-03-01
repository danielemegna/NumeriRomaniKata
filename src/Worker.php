<?php

class Worker {

  function work($n)
  {
    $s = '';

    if($n >= 1 && $n <= 3) {
      $s = '';
      while($n-- > 0) { $s .= 'I'; }
    }

    else if($n == 4)
      $s = 'IV';
      
    else if($n == 5)
      $s = 'V';

    else if($n >= 6 && $n <= 8) {
      $s = 'V';
      while($n-- > 5) { $s .= 'I'; }
    }

    else if($n == 9)
      $s = 'IX';

    else if($n == 10)
      $s = 'X';
    
    return $s;
  }

}
