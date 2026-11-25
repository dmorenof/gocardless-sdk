<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Creditor;

enum BankAccountVerificationStatus: string
{
    case CouldNotVerify = 'could_not_verify';
    case InReview = 'in_review';
    case Pending = 'pending';
    case Successful = 'successful';
}
