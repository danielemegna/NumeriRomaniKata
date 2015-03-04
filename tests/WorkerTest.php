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

  function testFromFiveToTenShouldReturnCorrectRappresentation()
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

  function testFromTwentyoneToThirty()
  {
    $this->assertEquals('XXI', $this->w->work(21));
    $this->assertEquals('XXII', $this->w->work(22));
    $this->assertEquals('XXIII', $this->w->work(23));
    $this->assertEquals('XXIV', $this->w->work(24));
    $this->assertEquals('XXV', $this->w->work(25));
    $this->assertEquals('XXVI', $this->w->work(26));
    $this->assertEquals('XXVII', $this->w->work(27));
    $this->assertEquals('XXVIII', $this->w->work(28));
    $this->assertEquals('XXIX', $this->w->work(29));
    $this->assertEquals('XXX', $this->w->work(30));
  }

  function testSomeThirtyAndJumpToFifty()
  {
    $this->assertEquals('XXXV', $this->w->work(35));
    $this->assertEquals('XXXVIII', $this->w->work(38));
    $this->assertEquals('XXXIX', $this->w->work(39));
    $this->assertEquals('L', $this->w->work(50));
  }

  /*function testFortyNumbers()
  {
    $this->assertEquals('XL', $this->w->work(40));
    $this->assertEquals('XLI', $this->w->work(41));
    $this->assertEquals('XLII', $this->w->work(42));
    $this->assertEquals('XLIII', $this->w->work(43));
    $this->assertEquals('XLIV', $this->w->work(44));
    $this->assertEquals('XLV', $this->w->work(45));
    $this->assertEquals('XLVI', $this->w->work(46));
    $this->assertEquals('XLVII', $this->w->work(47));
    $this->assertEquals('XLVIII', $this->w->work(48));
    $this->assertEquals('XLIX', $this->w->work(49));
  }*/
}


