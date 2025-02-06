<?php

declare(strict_types=1);

use Phi\Cast;
use Phi\Objects\BoolObject;
use Phi\Types\BoolType;
use Phi\Types\ScalarType;

beforeEach(function () {
    $this->bool = Cast::toBool(true);
});

it('should be instantiable', function () {
    expect($this->bool)->toBeInstanceOf(BoolObject::class);
});

it('should be an instance of BoolType', function () {
    expect($this->bool)->toBeInstanceOf(BoolType::class);
});

it('should be an instance of ScalarType', function () {
    expect($this->bool)->toBeInstanceOf(ScalarType::class);
});

it('should return the value', function () {
    expect($this->bool->get())->toBe(true);
});
