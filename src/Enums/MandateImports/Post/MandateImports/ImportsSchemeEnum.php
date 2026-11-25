<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\MandateImports\Post\MandateImports;

enum ImportsSchemeEnum: string
{
    case Ach = 'ach';
    case Autogiro = 'autogiro';
    case Bacs = 'bacs';
    case Becs = 'becs';
    case BecsNz = 'becs_nz';
    case Betalingsservice = 'betalingsservice';
    case FasterPayments = 'faster_payments';
    case Pad = 'pad';
    case PayTo = 'pay_to';
    case SepaCore = 'sepa_core';
}
