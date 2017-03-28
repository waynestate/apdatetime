<?php

use PHPUnit\Framework\TestCase;

/**
 * Class DisplayMenuTest
 */
class APDateTimeTest extends TestCase {
    /**
     * @test
     */
    public function AM()
    {
        $datetime = apdatetime(date('g:i a', strtotime('08:00:00')));
        $this->assertEquals('8:00 a.m.', $datetime);
    }

    /**
     * @test
     */
    public function PM()
    {
        $datetime = apdatetime(date('g:i a', strtotime('14:00:00')));
        $this->assertEquals('2:00 p.m.', $datetime);
    }

    /*
     * @test
     */
    public function adotm_pdotm()
    {
        $datetime = apdatetime(date('g:i a', strtotime('08:00:00')));
        $this->assertEquals('8:00 a.m.', $datetime);

        $datetime = apdatetime(date('g:i a', strotime('14:00:00')));
        $this->assertEquals('2:00 p.m.', $datetime);
    }

    /**
     * @test
     */
    public function January()
    {
        // Short month
        $datetime = apdatetime(date('M j, Y g:i a', strtotime('2015-01-01 14:00:00')));
        $this->assertEquals('Jan. 1, 2015 2:00 p.m.', $datetime);

        // Full month (should not be affected)
        $datetime = apdatetime(date('F j, Y g:i a', strtotime('2015-01-01 14:00:00')));
        $this->assertEquals('January 1, 2015 2:00 p.m.', $datetime);
    }

    /**
     * @test
     */
    public function February()
    {
        $datetime = apdatetime(date('M j, Y g:i a', strtotime('2015-02-01 14:00:00')));
        $this->assertEquals('Feb. 1, 2015 2:00 p.m.', $datetime);
    }

    /**
     * @test
     */
    public function March()
    {
        $datetime = apdatetime(date('M j, Y g:i a', strtotime('2015-03-01 14:00:00')));
        $this->assertEquals('March 1, 2015 2:00 p.m.', $datetime);
    }

    /**
     * @test
     */
    public function April()
    {
        $datetime = apdatetime(date('M j, Y g:i a', strtotime('2015-04-01 14:00:00')));
        $this->assertEquals('April 1, 2015 2:00 p.m.', $datetime);
    }

    /**
     * @test
     */
    public function May()
    {
        // Short month
        $datetime = apdatetime(date('M j, Y g:i a', strtotime('2015-05-01 14:00:00')));
        $this->assertEquals('May 1, 2015 2:00 p.m.', $datetime);

        // Full month (should not be affected)
        $datetime = apdatetime(date('M j, Y g:i a', strtotime('2015-05-01 14:00:00')));
        $this->assertEquals('May 1, 2015 2:00 p.m.', $datetime);
    }

    /**
     * @test
     */
    public function June()
    {
        $datetime = apdatetime(date('M j, Y g:i a', strtotime('2015-06-01 14:00:00')));
        $this->assertEquals('June 1, 2015 2:00 p.m.', $datetime);
    }

    /**
     * @test
     */
    public function July()
    {
        $datetime = apdatetime(date('M j, Y g:i a', strtotime('2015-07-01 14:00:00')));
        $this->assertEquals('July 1, 2015 2:00 p.m.', $datetime);
    }

    /**
     * @test
     */
    public function August()
    {
        $datetime = apdatetime(date('M j, Y g:i a', strtotime('2015-08-01 14:00:00')));
        $this->assertEquals('Aug. 1, 2015 2:00 p.m.', $datetime);
    }

    /**
     * @test
     */
    public function September()
    {
        $datetime = apdatetime(date('M j, Y g:i a', strtotime('2015-09-01 14:00:00')));
        $this->assertEquals('Sept. 1, 2015 2:00 p.m.', $datetime);
    }

    /**
     * @test
     */
    public function October()
    {
        $datetime = apdatetime(date('M j, Y g:i a', strtotime('2015-10-01 14:00:00')));
        $this->assertEquals('Oct. 1, 2015 2:00 p.m.', $datetime);
    }

    /**
     * @test
     */
    public function November()
    {
        $datetime = apdatetime(date('M j, Y g:i a', strtotime('2015-11-01 14:00:00')));
        $this->assertEquals('Nov. 1, 2015 2:00 p.m.', $datetime);
    }

    /**
     * @test
     */
    public function December()
    {
        $datetime = apdatetime(date('M j, Y g:i a', strtotime('2015-12-01 14:00:00')));
        $this->assertEquals('Dec. 1, 2015 2:00 p.m.', $datetime);
    }
}
