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

  function testFirstTenNumbersShouldBeConvertedProperly()
  {
    $this->assertEquals('V', $this->w->work(5));
    $this->assertEquals('VI', $this->w->work(6));
    $this->assertEquals('VII', $this->w->work(7));
    $this->assertEquals('VIII', $this->w->work(8));
    $this->assertEquals('IX', $this->w->work(9));
    $this->assertEquals('X', $this->w->work(10));
  }

  function testFromElevenToTwentyShouldWorkProperly()
  {
    $this->assertEquals('XI', $this->w->work(11));
    $this->assertEquals('XII', $this->w->work(12));
    $this->assertEquals('XIII', $this->w->work(13));
    $this->assertEquals('XIV', $this->w->work(14));
    $this->assertEquals('XV', $this->w->work(15));
    $this->assertEquals('XVI', $this->w->work(16));
    $this->assertEquals('XVII', $this->w->work(17));
    $this->assertEquals('XVIII', $this->w->work(18));
    $this->assertEquals('XIX', $this->w->work(19));
    $this->assertEquals('XX', $this->w->work(20));
  }
}


