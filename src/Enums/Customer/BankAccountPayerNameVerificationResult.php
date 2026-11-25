<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Customer;

enum BankAccountPayerNameVerificationResult: string
{
    case CannotPerformVerification = 'cannot_perform_verification';
    case Close = 'close';
    case Full = 'full';
}
