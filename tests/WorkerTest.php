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
    $this->assertEquals('IV', $this->w->work(4));
  }

  function testFirstTenNumbers()
  {
    $this->assertEquals('V', $this->w->work(5));
    $this->assertEquals('VI', $this->w->work(6));
    $this->assertEquals('VII', $this->w->work(7));
    $this->assertEquals('VIII', $this->w->work(8));
    $this->assertEquals('IX', $this->w->work(9));
    $this->assertEquals('X', $this->w->work(10));
  }
}


