<?php

declare(strict_types=1);

namespace GoCardlessSDK\CreditorBankAccounts\ByCreditorBankAccountId\Actions;

final class Disable extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /creditor_bank_accounts/{creditor_bank_account_id}/actions/disable [operationId: disable_creditor_bank_account] */
    /**
     * Disable a creditor bank account
     *
     * Immediately disables the bank account, no money can be paid out to a disabled account.
     *
     * This will return a `disable_failed` error if the bank account has already been disabled.
     *
     * A disabled bank account can be re-enabled by creating a new bank account resource with the same details.
     */
    public static function post(string $creditor_bank_account_id, \GoCardlessSDK\PostParams\CreditorBankAccounts\ByCreditorBankAccountId\Actions\Disable $params): \GoCardlessSDK\DTOs\Creditor\BankAccountSingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\CreditorBankAccounts\ByCreditorBankAccountId\Actions\Disable::class)->post($creditor_bank_account_id, $params);
    }
}
