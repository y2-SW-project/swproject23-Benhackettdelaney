<?php

namespace Tests\Unit;

use App\Box;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_true_is_true()
    {
        $box = new Box(['torch']);
        // $this->assertTrue(true);
        $this->assertEquals('torch', $box->takeOne());
    }
}
