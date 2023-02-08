<?php

declare(strict_types=1);

namespace Faisal50x\LaravelJob\Enums;

use Faisal50x\LaravelJob\Enums\Traits\Values;

enum JobType: string
{
    use Values;

    case FULL_TIME = 'full-time';
    case PART_TIME = 'part-time';
    case INTERN = 'intern';
}
