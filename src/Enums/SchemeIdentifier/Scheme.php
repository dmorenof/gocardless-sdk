<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\SchemeIdentifier;

enum Scheme: string
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
    case Sepa = 'sepa';
    case SepaCreditTransfer = 'sepa_credit_transfer';
    case SepaInstantCreditTransfer = 'sepa_instant_credit_transfer';
}
