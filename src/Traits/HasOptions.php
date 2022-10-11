<?php

namespace RhysLees\EnumTraits\Traits;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;

trait HasOptions
{
    /**
     * options collection
     *
     * @return \Illuminate\Support\Collection
     */
    public static function options(): Collection
    {
        return Collection::make(self::cases())->mapWithKeys(
            fn ($case) => [$case->value => Str::of($case->value)->replace('_', ' ')->value()]
        );
    }

    /**
     * optionsTitleCase collection
     *
     * @return \Illuminate\Support\Collection
     */
    public static function optionsTileCase(): Collection
    {
        return Collection::make(self::cases())->mapWithKeys(
            fn ($case) => [$case->value => Str::of($case->value)->replace('_', ' ')->title()->value()]
        );
    }
}
