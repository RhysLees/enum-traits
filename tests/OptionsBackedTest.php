<?php

use RhysLees\EnumTraits\Tests\Support\LanguageEnum;

it('can get options', function () {
    expect(LanguageEnum::optionsBacked()->toArray())->toBe([
        'en' => 'ENGLISH',
        'fr' => 'FRENCH',
        'de' => 'GERMAN',
    ]);
});

it('can get options with title case', function () {
    expect(LanguageEnum::optionsBackedTileCase()->toArray())->toBe([
        'en' => 'English',
        'fr' => 'French',
        'de' => 'German',
    ]);
});
