<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Payout\Item\TaxesItem;

enum CurrencyEnum: string
{
    case AUD = 'AUD';
    case CAD = 'CAD';
    case DKK = 'DKK';
    case EUR = 'EUR';
    case GBP = 'GBP';
    case NZD = 'NZD';
    case SEK = 'SEK';
    case USD = 'USD';
}
