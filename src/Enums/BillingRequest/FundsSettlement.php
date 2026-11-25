<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\BillingRequest;

enum FundsSettlement: string
{
    case Direct = 'direct';
    case Managed = 'managed';
}
