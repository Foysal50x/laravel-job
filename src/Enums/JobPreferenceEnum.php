<?php

declare(strict_types=1);

namespace Faisal50x\LaravelJob\Enums;

use Faisal50x\LaravelJob\Enums\Traits\Values;

enum JobPreferenceEnum: string
{
    use Values;

    case ONSITE = 'on-site';
    case REMOTE = 'remote';
    case HYBRID = 'hybrid';

    public function icon(): string
    {
        return match ($this) {
            static::ONSITE => '🏫',
            static::REMOTE => '🧑‍💻',
            static::HYBRID => '🏫 + 🧑‍💻',
        };
    }
}

var_dump(JobPreferenceEnum::ONSITE->value);
