<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\BillingRequest\MandateRequestConstraints\PeriodicLimitsItem;

enum AlignmentEnum: string
{
    case Calendar = 'calendar';
    case CreationDate = 'creation_date';
}
