<?php

declare(strict_types=1);

namespace Phi\Enums;

enum TypeName: string
{
    case Bool = 'bool';

    case Int = 'int';

    case Float = 'float';

    case String = 'string';

    case Array = 'array';

    case Object = 'object';

    case Resource = 'resource';
}
