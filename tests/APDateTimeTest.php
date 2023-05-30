<?php

use PHPUnit\Framework\TestCase;

/**
 * Class DisplayMenuTest
 */
class APDateTimeTest extends TestCase {
    /**
     * @test
     */
    public function testAM()
    {
        $datetime = apdatetime(date('g:i a', strtotime('08:00:00')));
        $this->assertEquals('8 a.m.', $datetime);
    }

    /**
     * @test
     */
    public function testPM()
    {
        $datetime = apdatetime(date('g:i a', strtotime('14:00:00')));
        $this->assertEquals('2 p.m.', $datetime);
    }

    /*
     * @test
     */
    public function testAdotm_pdotm()
    {
        $datetime = apdatetime(date('g:i a', strtotime('08:00:00')));
        $this->assertEquals('8 a.m.', $datetime);

        $datetime = apdatetime(date('g:i a', strtotime('14:00:00')));
        $this->assertEquals('2 p.m.', $datetime);
    }

    /*
     * @test
     */
    public function testNoon()
    {
        $datetime = apdatetime(date('g:i a', strtotime('12:00:00')));
        $this->assertEquals('noon', $datetime);
    }

    /*
     * @test
     */
    public function testMidnight()
    {
        $datetime = apdatetime(date('g:i a', strtotime('0:00:00')));
        $this->assertEquals('midnight', $datetime);
    }

    /**
     * @test
     */
    public function testTwothirty()
    {
        $datetime = apdatetime(date('g:i a', strtotime('14:30:00')));
        $this->assertEquals('2:30 p.m.', $datetime);
    }

    /**
     * @test
     */
    public function testJanuary()
    {
        // Short month
        $datetime = apdatetime(date('M j, Y g:i a', strtotime('2015-01-01 14:00:00')));
        $this->assertEquals('Jan. 1, 2015 2 p.m.', $datetime);

        // Full month (should not be affected)
        $datetime = apdatetime(date('F j, Y g:i a', strtotime('2015-01-01 14:00:00')));
        $this->assertEquals('January 1, 2015 2 p.m.', $datetime);
    }

    /**
     * @test
     */
    public function testFebruary()
    {
        $datetime = apdatetime(date('M j, Y g:i a', strtotime('2015-02-01 14:00:00')));
        $this->assertEquals('Feb. 1, 2015 2 p.m.', $datetime);
    }

    /**
     * @test
     */
    public function testMarch()
    {
        $datetime = apdatetime(date('M j, Y g:i a', strtotime('2015-03-01 14:00:00')));
        $this->assertEquals('March 1, 2015 2 p.m.', $datetime);
    }

    /**
     * @test
     */
    public function testApril()
    {
        $datetime = apdatetime(date('M j, Y g:i a', strtotime('2015-04-01 14:00:00')));
        $this->assertEquals('April 1, 2015 2 p.m.', $datetime);
    }

    /**
     * @test
     */
    public function testMay()
    {
        // Short month
        $datetime = apdatetime(date('M j, Y g:i a', strtotime('2015-05-01 14:00:00')));
        $this->assertEquals('May 1, 2015 2 p.m.', $datetime);

        // Full month (should not be affected)
        $datetime = apdatetime(date('M j, Y g:i a', strtotime('2015-05-01 14:00:00')));
        $this->assertEquals('May 1, 2015 2 p.m.', $datetime);
    }

    /**
     * @test
     */
    public function testJune()
    {
        $datetime = apdatetime(date('M j, Y g:i a', strtotime('2015-06-01 14:00:00')));
        $this->assertEquals('June 1, 2015 2 p.m.', $datetime);
    }

    /**
     * @test
     */
    public function testJuly()
    {
        $datetime = apdatetime(date('M j, Y g:i a', strtotime('2015-07-01 14:00:00')));
        $this->assertEquals('July 1, 2015 2 p.m.', $datetime);
    }

    /**
     * @test
     */
    public function testAugust()
    {
        $datetime = apdatetime(date('M j, Y g:i a', strtotime('2015-08-01 14:00:00')));
        $this->assertEquals('Aug. 1, 2015 2 p.m.', $datetime);
    }

    /**
     * @test
     */
    public function testSeptember()
    {
        $datetime = apdatetime(date('M j, Y g:i a', strtotime('2015-09-01 14:00:00')));
        $this->assertEquals('Sept. 1, 2015 2 p.m.', $datetime);
    }

    /**
     * @test
     */
    public function testOctober()
    {
        $datetime = apdatetime(date('M j, Y g:i a', strtotime('2015-10-01 14:00:00')));
        $this->assertEquals('Oct. 1, 2015 2 p.m.', $datetime);
    }

    /**
     * @test
     */
    public function testNovember()
    {
        $datetime = apdatetime(date('M j, Y g:i a', strtotime('2015-11-01 14:00:00')));
        $this->assertEquals('Nov. 1, 2015 2 p.m.', $datetime);
    }

    /**
     * @test
     */
    public function testDecember()
    {
        $datetime = apdatetime(date('M j, Y g:i a', strtotime('2015-12-01 14:00:00')));
        $this->assertEquals('Dec. 1, 2015 2 p.m.', $datetime);
    }
}
