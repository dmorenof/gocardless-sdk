<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class CustomerBankAccounts extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /customer_bank_accounts [operationId: list_customer_bank_account] */
    /**
     * List customer bank accounts
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of your bank accounts.
     */
    public static function get(\GoCardlessSDK\GetParams\CustomerBankAccounts $params): \GoCardlessSDK\DTOs\Customer\BankAccountMultiResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\CustomerBankAccounts::class)->get($params);
    }

    /** POST /customer_bank_accounts [operationId: create_customer_bank_account] */
    /**
     * Create a customer bank account
     *
     * Creates a new customer bank account object.
     *
     * There are three different ways to supply bank account details:
     *
     * - [Local details](https://docs.gocardless.com/docs/api-reference/local-bank-details)
     *
     * - IBAN
     *
     * - [Customer Bank Account Tokens](https://docs.gocardless.com/docs/collect-payments/integration-types/javascript-drop-in-flow)
     *
     * For more information on the different fields required in each country, see [local bank details](https://docs.gocardless.com/docs/api-reference/local-bank-details).
     *
     * <p class="restricted-notice"><strong>Restricted</strong>: this endpoint requires approved [custom payment pages](https://support.gocardless.com/hc/en-gb/articles/115004521925-Custom-Payment-Pages).</p>
     *
     * <p class="notice"><strong>Note</strong>: this endpoint is a legacy API endpoint and does not support GoCardless' newest features. We recommend using the [Billing Requests API](https://docs.gocardless.com/docs/collect-payments/setting-up-mandates) instead.</p>
     */
    public static function post(\GoCardlessSDK\PostParams\CustomerBankAccounts $params): \GoCardlessSDK\DTOs\Customer\BankAccountSingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\CustomerBankAccounts::class)->post($params);
    }

    /** GET /customer_bank_accounts/{customer_bank_account_id} [operationId: get_customer_bank_accounts] */
    /**
     * Get a single customer bank account
     *
     * Retrieves the details of an existing bank account.
     */
    public static function getByCustomerBankAccountId(string $customer_bank_account_id, \GoCardlessSDK\GetParams\CustomerBankAccounts\ByCustomerBankAccountId $params): \GoCardlessSDK\DTOs\Customer\BankAccountSingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\CustomerBankAccounts::class)->getByCustomerBankAccountId($customer_bank_account_id, $params);
    }

    /** PUT /customer_bank_accounts/{customer_bank_account_id} [operationId: update_customer_bank_accounts] */
    /**
     * Update a customer bank account
     *
     * Updates a customer bank account object. Only the metadata parameter is allowed.
     */
    public static function putByCustomerBankAccountId(string $customer_bank_account_id, \GoCardlessSDK\PutParams\CustomerBankAccounts\ByCustomerBankAccountId $params): \GoCardlessSDK\DTOs\Customer\BankAccountSingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\CustomerBankAccounts::class)->putByCustomerBankAccountId($customer_bank_account_id, $params);
    }
}
