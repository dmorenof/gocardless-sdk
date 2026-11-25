<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\BillingRequest;

enum AuthorisationSource: string
{
    case Paper = 'paper';
    case Telephone = 'telephone';
    case Web = 'web';
}
