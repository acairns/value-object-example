<?php

use PHPUnit\Framework\TestCase;

class CapitalizedStringTest extends TestCase
{
    public function test_it_can_not_be_capitalized_if_empty()
    {
        $this->expectException(InvalidArgumentException::class);

        new CapitalizedString('');
    }

    public function test_it_can_not_start_with_a_number()
    {
        $this->expectException(InvalidArgumentException::class);

        new CapitalizedString('0Foo');
    }
}
