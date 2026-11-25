<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\BillingRequest\ActionsItem\BankAuthorisation;

enum AuthorisationTypeEnum: string
{
    case Mandate = 'mandate';
    case Payment = 'payment';
}
