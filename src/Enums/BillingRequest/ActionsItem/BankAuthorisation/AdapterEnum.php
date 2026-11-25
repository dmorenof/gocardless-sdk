<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\BillingRequest\ActionsItem\BankAuthorisation;

enum AdapterEnum: string
{
    case BankPayRecurring = 'bank_pay_recurring';
    case BankidAis = 'bankid_ais';
    case OpenBankingGatewayAis = 'open_banking_gateway_ais';
    case OpenBankingGatewayPis = 'open_banking_gateway_pis';
}
