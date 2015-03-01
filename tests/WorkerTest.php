<?php

require_once __DIR__.'/../src/Worker.php';

class WorkerTest extends PHPUnit_Framework_TestCase
{
  private $w;

  function setUp()
  {
    $this->w = new Worker();
  }

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
    $s = $this->w->work(1);

    $this->assertEquals('I', $s);
  }

  function testTwoAndThreeShouldReturnCorrectRappresentation()
  {
    $this->assertEquals('II', $this->w->work(2));
    $this->assertEquals('III', $this->w->work(3));
  }

  function testFourShouldReturnIV()
  {
    $w = new Worker();

    $this->assertEquals('IV', $this->w->work(4));
  }
}


