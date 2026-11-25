<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Institution;

enum Status: string
{
    case Disabled = 'disabled';
    case Enabled = 'enabled';
    case TemporarilyDisabled = 'temporarily_disabled';
}
