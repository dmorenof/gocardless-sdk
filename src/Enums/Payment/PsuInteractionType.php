<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Payment;

enum PsuInteractionType: string
{
    case InSession = 'in_session';
    case OffSession = 'off_session';
}
