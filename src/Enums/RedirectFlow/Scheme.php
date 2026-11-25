<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\RedirectFlow;

enum Scheme: string
{
    case Ach = 'ach';
    case Autogiro = 'autogiro';
    case Bacs = 'bacs';
    case Becs = 'becs';
    case BecsNz = 'becs_nz';
    case Betalingsservice = 'betalingsservice';
    case Pad = 'pad';
    case SepaCore = 'sepa_core';
}
