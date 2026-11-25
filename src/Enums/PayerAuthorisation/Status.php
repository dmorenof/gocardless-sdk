<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\PayerAuthorisation;

enum Status: string
{
    case Completed = 'completed';
    case Confirmed = 'confirmed';
    case Created = 'created';
    case Failed = 'failed';
    case Submitted = 'submitted';
}
