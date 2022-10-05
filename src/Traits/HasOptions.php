<?php

namespace RhysLees\EnumTraits\Traits;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;

trait HasOptions
{
    /**
     * getOptions collection
     *
     * @return \Illuminate\Support\Collection
     */
    public static function getOptions(): Collection
    {
        return Collection::make(self::cases())->mapWithKeys(
            fn ($case) => [$case->value => Str::of($case->value)->replace('_', ' ')->title()->value()]
        );
    }
}
