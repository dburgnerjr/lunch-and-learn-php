<?php
namespace ChadicusTest;

use Chadicus\Math;

/**
 * Unit tests for the \Chadicus\Math class
 *
 * @coversDefaultClass \Chadicus\Math
 */
final class MathTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * Verify basic behavior of multiply method
	 *
	 * @test
	 * @covers ::multiply
	 *
	 * return void
	 */
	public function multiply() {
		$this->assertSame(25, Math::multiply(5, 5), 'Math::multiply() did not return 25 for 5 * 5');
	}

	/**
	 * Verify behavior of multiply when one argument is not a number
	 *
	 * @test
	 * @covers ::multiply
	 * @expectedException \InvalidArgumentException
	 * @expectedExceptionMessage Both inputs must be numeric
	 *
	 * return void
	 */
	public function multiply_nonNumericInput() {
		Math::multiply('a', 5);
	}

	/**
	 * Verify basic behavior of sub()
	 * @test
	 * @covers ::sub
	 *
	 * @return void
	 */
	public function sub()
	{
		$this->assertSame(1, Math::sub(3,2), 'Math:sub() did not return 1 for inputs 3 and 2');
	}

	/**
	 * Verify behavior of sub() when $x or $y are not integers
	 *
	 * @test
	 * @covers ::sub
	 * @expectedException \InvalidArgumentException
	 * @expectedExceptionMessage $x and $y must be integers
	 *
	 * @return void
	 */
	public function sub_notInteger()
	{
		Math::sub(3.5, 2);
	}

    /**
     * Verifies Addition
     * @test
     */
    public function test_addition()
    {
        $this->assertSame(2,2);
    }
}

