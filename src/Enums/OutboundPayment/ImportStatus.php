<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\OutboundPayment;

enum ImportStatus: string
{
    case Cancelled = 'cancelled';
    case Created = 'created';
    case Invalid = 'invalid';
    case Processed = 'processed';
    case Processing = 'processing';
    case Valid = 'valid';
    case Validating = 'validating';
}
