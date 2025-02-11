<?php

declare(strict_types=1);

namespace Phi;

use Phi\Objects\BoolObject;
use Phi\Objects\FloatObject;
use Phi\Objects\IntObject;
use Phi\Objects\MixedObject;
use Phi\Objects\NumberObject;
use Phi\Objects\NumericObject;
use Phi\Objects\ScalarObject;
use Phi\Objects\StringObject;
use Phi\Types\BoolType;
use Phi\Types\FloatType;
use Phi\Types\IntType;
use Phi\Types\MixedType;
use Phi\Types\NumberType;
use Phi\Types\NumericType;
use Phi\Types\ScalarType;
use Phi\Types\StringType;

class Cast
{
    public function __construct(protected mixed $value) {}

    public static function from(mixed $value): self
    {
        return new self($value);
    }

    public function intoBool(): BoolType
    {
        return BoolObject::of($this->value);
    }

    public function intoInt(): IntType
    {
        return IntObject::of($this->value);
    }

    public function intoFloat(): FloatType
    {
        return FloatObject::of($this->value);
    }

    public function intoString(): StringType
    {
        return StringObject::of($this->value);
    }

    public function intoNumber(): NumberType
    {
        return NumberObject::of($this->value);
    }

    public function intoNumeric(): NumericType
    {
        return NumericObject::of($this->value);
    }

    public function intoScalar(): ScalarType
    {
        return ScalarObject::of($this->value);
    }

    public function intoMixed(): MixedType
    {
        return MixedObject::of($this->value);
    }

    public static function toBool(mixed $value): BoolType
    {
        return self::from($value)->intoBool();
    }

    public static function toInt(mixed $value): IntType
    {
        return self::from($value)->intoInt();
    }

    public static function toFloat(mixed $value): FloatType
    {
        return self::from($value)->intoFloat();
    }

    public static function toString(mixed $value): StringType
    {
        return self::from($value)->intoString();
    }

    public static function toNumber(mixed $value): NumberType
    {
        return self::from($value)->intoNumber();
    }

    public static function toNumeric(mixed $value): NumericType
    {
        return self::from($value)->intoNumeric();
    }

    public static function toScalar(mixed $value): ScalarType
    {
        return self::from($value)->intoScalar();
    }

    public static function toMixed(mixed $value): MixedType
    {
        return self::from($value)->intoMixed();
    }
}
