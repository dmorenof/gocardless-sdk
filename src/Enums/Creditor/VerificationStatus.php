<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Creditor;

enum VerificationStatus: string
{
    case ActionRequired = 'action_required';
    case InReview = 'in_review';
    case Successful = 'successful';
}
