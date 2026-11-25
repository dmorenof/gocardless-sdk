<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\BillingRequest\ActionsItem;

enum TypeEnum: string
{
    case BankAuthorisation = 'bank_authorisation';
    case ChooseCurrency = 'choose_currency';
    case CollectAmount = 'collect_amount';
    case CollectBankAccount = 'collect_bank_account';
    case CollectCustomerDetails = 'collect_customer_details';
    case ConfirmPayerDetails = 'confirm_payer_details';
    case SelectInstitution = 'select_institution';
}
