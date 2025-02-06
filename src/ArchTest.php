<?php

declare(strict_types=1);

test('globals')
    ->expect(['dd', 'dump', 'ray'])
    ->not->toBeUsed();

test('classes')
    ->expect('Phi\Values')
    ->toUseStrictTypes();

test('abstract classes')
    ->expect('Phi\Values\Abstracts')
    ->classes()
    ->toBeAbstract()
    ->toHavePrefix('Abstract');

test('objects')
    ->expect('Phi\Values\Objects')
    ->classes()
    ->toHaveSuffix('Object')
    ->toHaveConstructor();

test('types')
    ->expect('Phi\Values\Types')
    ->interfaces()
    ->toOnlyBeUsedIn('Phi\Values', 'Phi\Values\Types');

test('concerns')
    ->expect('Phi\Values\Concerns')
    ->traits()
    ->toOnlyBeUsedIn('Phi\Values', 'Phi\Values\Concerns');
