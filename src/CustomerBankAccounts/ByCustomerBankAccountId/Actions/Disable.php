<?php

declare(strict_types=1);

namespace GoCardlessSDK\CustomerBankAccounts\ByCustomerBankAccountId\Actions;

final class Disable extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /customer_bank_accounts/{customer_bank_account_id}/actions/disable [operationId: disable_customer_bank_account] */
    /**
     * Disable a customer bank account
     *
     * Immediately cancels all associated mandates and cancellable payments.
     *
     * This will return a `disable_failed` error if the bank account has already been disabled.
     *
     * A disabled bank account can be re-enabled by creating a new bank account resource with the same details.
     */
    public static function post(string $customer_bank_account_id, \GoCardlessSDK\PostParams\CustomerBankAccounts\ByCustomerBankAccountId\Actions\Disable $params): \GoCardlessSDK\DTOs\Customer\BankAccountSingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\CustomerBankAccounts\ByCustomerBankAccountId\Actions\Disable::class)->post($customer_bank_account_id, $params);
    }

}
