<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Bank;

enum DetailsLookupPayerNameVerificationResult: string
{
    case CannotPerformVerification = 'cannot_perform_verification';
    case Close = 'close';
    case Full = 'full';
}
