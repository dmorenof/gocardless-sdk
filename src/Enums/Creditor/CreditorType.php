<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Creditor;

enum CreditorType: string
{
    case Charity = 'charity';
    case Company = 'company';
    case Individual = 'individual';
    case Partnership = 'partnership';
    case Trust = 'trust';
}
