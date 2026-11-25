<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Payment;

enum SortField: string
{
    case Amount = 'amount';
    case ChargeDate = 'charge_date';
}
