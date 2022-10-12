<?php

namespace RhysLees\EnumTraits\Traits;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;

trait HasRandom
{
    /**
     * random enum
     *
     */
    public static function random()
    {
        return Collection::make(self::cases())->mapWithKeys(
            fn ($case) => [$case->value => Str::of($case->value)->replace('_', ' ')->value()]
        )->random();
    }

    /**
     * randomTitleCase enum
     *
     */
    public static function randomTitleCase()
    {
        return Collection::make(self::cases())->mapWithKeys(
            fn ($case) => [$case->value => Str::of($case->value)->replace('_', ' ')->title()->value()]
        )->random();
    }
}
