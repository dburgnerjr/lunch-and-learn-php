<?php
namespace ChadicusTest;

use Chadicus\Language\russian;

/**
 * Unit tests for the \Chadicus\Language\russian class
 *
 * @coversDefaultClass \Chadicus\Language\russian
 */
final class russianTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Verify basic behavior of greet()
     *
     * @test
     * @covers ::getGreeting
     *
     * return void
     */
    public function greet()
    {
		$this->assertSame("Привет Мир!", russian::getGreeting(), 'russian::getGreeting() did not return Привет Мир!');
    }
}
