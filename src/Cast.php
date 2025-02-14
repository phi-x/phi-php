<?php

declare(strict_types=1);

namespace Phi;

use Phi\Contracts\IsBool;
use Phi\Contracts\IsFloat;
use Phi\Contracts\IsInt;
use Phi\Contracts\IsMixed;
use Phi\Contracts\IsNumber;
use Phi\Contracts\IsNumeric;
use Phi\Contracts\IsScalar;
use Phi\Contracts\IsString;
use Phi\Objects\BoolObject;
use Phi\Objects\FloatObject;
use Phi\Objects\IntObject;
use Phi\Objects\MixedObject;
use Phi\Objects\NumberObject;
use Phi\Objects\NumericObject;
use Phi\Objects\ScalarObject;
use Phi\Objects\StringObject;

class Cast
{
    public function __construct(protected mixed $value) {}

    public static function from(mixed $value): self
    {
        return new self($value);
    }

    public function intoBool(): IsBool
    {
        return BoolObject::of($this->value);
    }

    public function intoInt(): IsInt
    {
        return IntObject::of($this->value);
    }

    public function intoFloat(): IsFloat
    {
        return FloatObject::of($this->value);
    }

    public function intoString(): IsString
    {
        return StringObject::of($this->value);
    }

    public function intoNumber(): IsNumber
    {
        return NumberObject::of($this->value);
    }

    public function intoNumeric(): IsNumeric
    {
        return NumericObject::of($this->value);
    }

    public function intoScalar(): IsScalar
    {
        return ScalarObject::of($this->value);
    }

    public function intoMixed(): IsMixed
    {
        return MixedObject::of($this->value);
    }

    public static function toBool(mixed $value): IsBool
    {
        return self::from($value)->intoBool();
    }

    public static function toInt(mixed $value): IsInt
    {
        return self::from($value)->intoInt();
    }

    public static function toFloat(mixed $value): IsFloat
    {
        return self::from($value)->intoFloat();
    }

    public static function toString(mixed $value): IsString
    {
        return self::from($value)->intoString();
    }

    public static function toNumber(mixed $value): IsNumber
    {
        return self::from($value)->intoNumber();
    }

    public static function toNumeric(mixed $value): IsNumeric
    {
        return self::from($value)->intoNumeric();
    }

    public static function toScalar(mixed $value): IsScalar
    {
        return self::from($value)->intoScalar();
    }

    public static function toMixed(mixed $value): IsMixed
    {
        return self::from($value)->intoMixed();
    }
}
