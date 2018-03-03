<?php

final class CapitalizedString
{
    private $string;

    public function __construct(string $string)
    {
        if (empty($string)) {
            throw new InvalidArgumentException('An empty string cannot be capitalized.');
        }

        $this->string = $string;
    }

    public function __toString(): string
    {
        return $this->string;
    }
}
