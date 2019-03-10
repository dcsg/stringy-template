<?php

namespace Tests\DCSG\StringyTemplate;

use DCSG\StringyTemplate\S;
use PHPUnit\Framework\TestCase;

/**
 * @author Daniel Gomes <danielcesargomes@gmail.com>
 */
final class STest extends TestCase
{
    public function testRenderWithOnlyOneReplacement(): void
    {
        $expected = 'It can render my variable';

        $this->assertEquals($expected, S::render('It can render my {replacement}', ['replacement' => 'variable']));
    }

    public function testRenderWithMultiReplacements(): void
    {
        $expected = 'My variable is so interesting that I had to use the variable again';

        $this->assertEquals(
            $expected,
            S::render(
                'My {replacement} is so {replacement2} that I had to use the {replacement} again',
                [
                    'replacement' => 'variable',
                    'replacement2' => 'interesting',
                ]
            )
        );
    }

    public function testRenderWithConversionSpecifications(): void
    {
        $expected = 'I have 1.5 oranges';

        $this->assertEquals(
            $expected,
            S::render(
                'I have {num%.1f} {fruit}',
                [
                    'num' => 1.5345,
                    'fruit' => 'oranges',
                ]
            )
        );
    }

    public function testJoin(): void
    {
        $expected = 'one, two, three';

        $this->assertEquals($expected, S::join(['one', 'two', 'three'], ', '));
    }

    public function testJoinWithOnlyOneElementInTheArray(): void
    {
        $expected = 'one';

        $this->assertEquals($expected, S::join(['one'], ', '));
    }
}
