<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Bank;

enum AccountHolderVerificationType: string
{
    case ConfirmationOfPayee = 'confirmation_of_payee';
}
