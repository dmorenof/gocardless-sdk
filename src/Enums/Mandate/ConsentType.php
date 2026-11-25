<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Mandate;

enum ConsentType: string
{
    case OneOff = 'one_off';
    case Recurring = 'recurring';
    case Single = 'single';
    case Sporadic = 'sporadic';
    case Standing = 'standing';
}
