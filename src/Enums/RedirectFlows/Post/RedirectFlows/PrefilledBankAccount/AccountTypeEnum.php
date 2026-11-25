<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\RedirectFlows\Post\RedirectFlows\PrefilledBankAccount;

enum AccountTypeEnum: string
{
    case Checking = 'checking';
    case Savings = 'savings';
}
