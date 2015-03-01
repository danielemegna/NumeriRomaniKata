<?php

require_once __DIR__.'/../src/Worker.php';

class WorkerTest extends PHPUnit_Framework_TestCase
{
  function testTrueIsTrue()
  {
    $this->assertTrue(true);
  }

  function testWorkerExists()
  {
    $w = new Worker();
  }

  function testOneShouldReturnI()
  {
    $w = new Worker();
    $s = $w->work(1);

    $this->assertEquals('I', $s);
  }

  function testTwoAndThreeShouldReturnCorrectRappresentation()
  {
    $w = new Worker();
    $s = 

    $this->assertEquals('II', $w->work(2));
    $this->assertEquals('III', $w->work(3));
  }

}


