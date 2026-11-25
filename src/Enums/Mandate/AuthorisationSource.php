<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Mandate;

enum AuthorisationSource: string
{
    case Paper = 'paper';
    case Telephone = 'telephone';
    case Web = 'web';
}
