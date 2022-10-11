<?php

namespace RhysLees\EnumTraits\Traits;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;

trait HasRandom
{
    /**
     * random collection
     *
     * @return \Illuminate\Support\Collection
     */
    public static function random(): Collection
    {
        return Collection::make(self::cases())->mapWithKeys(
            fn ($case) => [$case->value => Str::of($case->value)->replace('_', ' ')->value()]
        );
    }

    /**
     * randomTitleCase collection
     *
     * @return \Illuminate\Support\Collection
     */
    public static function randomTitleCase(): Collection
    {
        return Collection::make(self::cases())->mapWithKeys(
            fn ($case) => [$case->value => Str::of($case->value)->replace('_', ' ')->title()->value()]
        );
    }
}
