<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Mandates\Get\Query;

enum MandateTypeEnum: string
{
    case BankDebit = 'bank_debit';
    case Instant = 'instant';
    case Recurring = 'recurring';
    case VrpCommercial = 'vrp_commercial';
    case VrpSweeping = 'vrp_sweeping';
}
