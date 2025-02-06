<?php

declare(strict_types=1);

use Phi\Cast;
use Phi\Objects\NumericObject;
use Phi\Types\NumericType;
use Phi\Types\ScalarType;

beforeEach(function () {
    $this->numeric = Cast::toNumeric('84.21');
});

it('should be instantiable', function () {
    expect($this->numeric)->toBeInstanceOf(NumericObject::class);
});

it('should be an instance of NumericType', function () {
    expect($this->numeric)->toBeInstanceOf(NumericType::class);
});

it('should be an instance of ScalarType', function () {
    expect($this->numeric)->toBeInstanceOf(ScalarType::class);
});

it('should return the value', function () {
    expect($this->numeric->get())->toBe('84.21');
});
