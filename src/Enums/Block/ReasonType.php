<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Block;

enum ReasonType: string
{
    case IdentityFraud = 'identity_fraud';
    case NoIntentToPay = 'no_intent_to_pay';
    case Other = 'other';
    case UnfairChargeback = 'unfair_chargeback';
}
