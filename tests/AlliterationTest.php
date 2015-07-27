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
     * Verify basic behavior of getPhrase()
     *
     * @test
     * @covers ::getPhrase
     *
     * @return void
     */
    public function getPhrase()
    {
        $alliteration = new Alliteration();
        $phrase = $alliteration->getPhrase('p', 2);
        $words = explode(' ', $phrase);
        $this->assertSame(2, count($phrase));
        $this->assertSame('p', substr($words[0], 0, 1));
        $this->assertSame('p', substr($words[1], 0, 1));
    }
}
