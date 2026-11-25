<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Institution;

enum IncludeDisabled: string
{
    case False_ = 'false';
    case True_ = 'true';
}
