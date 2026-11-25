<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\BillingRequest\FlowPrefilledBankAccount;

enum AccountTypeEnum: string
{
    case Checking = 'checking';
    case Savings = 'savings';
}
