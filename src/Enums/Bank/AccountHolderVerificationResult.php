<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Bank;

enum AccountHolderVerificationResult: string
{
    case FullMatch = 'full_match';
    case NoMatch = 'no_match';
    case PartialMatch = 'partial_match';
    case UnableToMatch = 'unable_to_match';
}
