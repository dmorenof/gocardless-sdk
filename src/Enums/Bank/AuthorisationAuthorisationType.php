<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Bank;

enum AuthorisationAuthorisationType: string
{
    case Mandate = 'mandate';
    case Payment = 'payment';
}
