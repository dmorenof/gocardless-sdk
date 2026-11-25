<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class CreditorBankAccounts extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /creditor_bank_accounts [operationId: list_creditor_bank_account] */
    /**
     * List creditor bank accounts
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of your creditor bank accounts.
     */
    public static function get(\GoCardlessSDK\GetParams\CreditorBankAccounts $params): \GoCardlessSDK\DTOs\Creditor\BankAccountMultiResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\CreditorBankAccounts::class)->get($params);
    }

    /** POST /creditor_bank_accounts [operationId: create_creditor_bank_account] */
    /**
     * Create a creditor bank account
     *
     * Creates a new creditor bank account object.
     */
    public static function post(\GoCardlessSDK\PostParams\CreditorBankAccounts $params): \GoCardlessSDK\DTOs\Creditor\BankAccountSingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\CreditorBankAccounts::class)->post($params);
    }

    /** GET /creditor_bank_accounts/{creditor_bank_account_id} [operationId: get_creditor_bank_accounts] */
    /**
     * Get a single creditor bank account
     *
     * Retrieves the details of an existing creditor bank account.
     */
    public static function getByCreditorBankAccountId(string $creditor_bank_account_id, \GoCardlessSDK\GetParams\CreditorBankAccounts\ByCreditorBankAccountId $params): \GoCardlessSDK\DTOs\Creditor\BankAccountSingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\CreditorBankAccounts::class)->getByCreditorBankAccountId($creditor_bank_account_id, $params);
    }

}
