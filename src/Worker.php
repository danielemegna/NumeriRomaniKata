<?php

class Worker {

  function work($n)
  {
    $s = '';

    if($n <= 3)
      while($n-- > 0) { $s .= 'I'; }
    else
      $s = 'IV';
    
    return $s;
  }

}
