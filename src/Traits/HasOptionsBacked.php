<?php

namespace RhysLees\EnumTraits\Traits;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;

trait HasOptionsBacked
{
    /**
     * options collection
     */
    public static function optionsBacked(): Collection
    {
        return Collection::make(self::cases())->mapWithKeys(
            fn ($case) => [$case->value => $case->name]
        );
    }

    /**
     * optionsTitleCase collection
     */
    public static function optionsBackedTileCase(): Collection
    {
        return Collection::make(self::cases())->mapWithKeys(
            fn ($case) => [$case->value => Str::title($case->name)]
        );
    }
}
