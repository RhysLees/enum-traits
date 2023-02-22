<?php

namespace RhysLees\EnumTraits\Tests\Support;

use RhysLees\EnumTraits\Traits\HasOptions;
use RhysLees\EnumTraits\Traits\HasOptionsBacked;

enum LanguageEnum: string
{
    use HasOptions, HasOptionsBacked;

    case ENGLISH = 'en';
    case FRENCH = 'fr';
    case GERMAN = 'de';
}
