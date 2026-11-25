<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Mandate;

enum FundsSettlement: string
{
    case Direct = 'direct';
    case Managed = 'managed';
}
