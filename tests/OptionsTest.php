<?php

use RhysLees\EnumTraits\Tests\Support\LanguageEnum;

it('can get options', function () {
    expect(LanguageEnum::options()->toArray())->toBe([
        'en' => 'en',
        'fr' => 'fr',
        'de' => 'de',
    ]);
});

it('can get options with title case', function () {
    expect(LanguageEnum::optionsTileCase()->toArray())->toBe([
        'en' => 'En',
        'fr' => 'Fr',
        'de' => 'De',
    ]);
});
