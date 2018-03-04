<?php

final class CapitalizedString
{
    private $string;

    public function __construct(string $string)
    {
        if (empty($string)) {
            throw new InvalidArgumentException('An empty string cannot be capitalized.');
        }

        if (! ctype_upper($string[0])) {
            throw new InvalidArgumentException("The string '{$string}' is not capitalized.");
        }

        $this->string = $string;
    }

    public function length(): int
    {
        return strlen($this->string);
    }

    public function __toString(): string
    {
        return $this->string;
    }
}
