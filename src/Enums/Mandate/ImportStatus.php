<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Mandate;

enum ImportStatus: string
{
    case Cancelled = 'cancelled';
    case Created = 'created';
    case Processed = 'processed';
    case Processing = 'processing';
    case Submitted = 'submitted';
}
