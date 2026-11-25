<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Mandate\ConsentParameters;

enum PeriodAlignmentEnum: string
{
    case Calendar = 'calendar';
    case Consent = 'consent';
    case CreationDate = 'creation_date';
}
