<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Payment;

enum AccountTransactionDirection: string
{
    case Credit = 'credit';
    case Debit = 'debit';
}
