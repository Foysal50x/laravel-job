<?php

declare(strict_types=1);

namespace Faisal50x\LaravelJob\Enums;

use Faisal50x\LaravelJob\Enums\Traits\Values;

enum JobStatus: string
{
    use Values;

    case DRAFT = 'draft';
    case CLOSED = 'closed';
    case PUBLISHED = 'published';
}
