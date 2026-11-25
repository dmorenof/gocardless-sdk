<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Mandate;

enum PdfSubscriptionFrequency: string
{
    case Monthly = 'monthly';
    case Weekly = 'weekly';
    case Yearly = 'yearly';
}
