<?php

use PHPUnit\Framework\TestCase;

class CapitalizedStringTest extends TestCase
{
    public function test_it_can_not_be_capitalized_if_empty()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('An empty string cannot be capitalized.');

        new CapitalizedString('');
    }

    public function test_it_can_not_start_with_a_number()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("The string '0Foo' is not capitalized");

        new CapitalizedString('0Foo');
    }

    public function test_the_first_character_must_be_a_capital()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("The string 'fOO' is not capitalized");

        new CapitalizedString('fOO');
    }
}
