<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Payment;

enum SortDirection: string
{
    case Asc = 'asc';
    case Desc = 'desc';
}
