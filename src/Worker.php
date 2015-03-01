<?php

class Worker {

  function work($n)
  {
    if($n == 1)
      return 'I';

    if($n == 2)
      return 'II';

    if($n == 4)
      return 'IV';

    return 'III';
  }

}
