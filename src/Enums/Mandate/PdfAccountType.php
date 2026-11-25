<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Mandate;

enum PdfAccountType: string
{
    case Checking = 'checking';
    case Savings = 'savings';
}
