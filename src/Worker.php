<?php

class Worker {

  function work($n)
  {
    $s = '';

    if($n <= 3)
      for($i = 0; $i < $n; $i++) { $s .= 'I'; }
    else
      $s = 'IV';
    
    return $s;
  }

}
