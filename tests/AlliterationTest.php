<?php

namespace ChadicusTest;

use Chadicus\Alliteration;

/**
 * Unit tests for the Alliteration class
 *
 * @coversDefaultClass Alliteration
 */
final class AlliterationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Verify basic behavior of getAlliteration()
     *
     * @test
     * @covers ::getAlliteration
     *
     * @return void
     */
    public function getAlliteration()
    {
        $alliteration = new Alliteration();
        $phrase = $alliteration->getAlliteration('p', 2);
        $words = explode(' ', $phrase);
        $this->assertSame(2, count($phrase));
        $this->assertSame('p', substr($words[0], 0, 1));
        $this->assertSame('p', substr($words[1], 0, 1));
    }
}
