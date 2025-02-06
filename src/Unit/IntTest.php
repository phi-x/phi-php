<?php

declare(strict_types=1);

use Phi\Cast;
use Phi\Objects\IntObject;
use Phi\Types\IntType;
use Phi\Types\NumberType;

beforeEach(function () {
    $this->int = Cast::toInt(42);
});

it('should be instantiable', function () {
    expect($this->int)->toBeInstanceOf(IntObject::class);
});

it('should be an instance of IntType', function () {
    expect($this->int)->toBeInstanceOf(IntType::class);
});

it('should be an instance of NumberType', function () {
    expect($this->int)->toBeInstanceOf(NumberType::class);
});

it('should return the value', function () {
    expect($this->int->get())->toBe(42);
});
