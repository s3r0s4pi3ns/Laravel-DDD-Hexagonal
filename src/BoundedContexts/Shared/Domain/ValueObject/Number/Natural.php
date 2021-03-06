<?php

declare(strict_types=1);

namespace Shared\Domain\ValueObject\Number;

use InvalidArgumentException;
use Shared\Domain\ValueObject\Generic\IntegerValueObject;

class Natural extends IntegerValueObject
{
    public function __construct(int $value)
    {
        if (!filter_var($value, FILTER_VALIDATE_INT,  [
            'options' => [
                'min_range' => 0,
            ],
        ])) {
            throw new InvalidArgumentException("The number {$value} is not natural.");
        }

        parent::__construct($value);
    }
}
