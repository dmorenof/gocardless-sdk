<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Customer;

enum BankAccountAccountType: string
{
    case Checking = 'checking';
    case Savings = 'savings';
}
