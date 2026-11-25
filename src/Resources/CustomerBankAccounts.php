<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources;

final class CustomerBankAccounts extends \GoCardlessSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/customer_bank_accounts',
        'security' => [
            [
                'bearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\GoCardlessSDK\\Responses\\Errors\\Status400Response',
            401 => '\\GoCardlessSDK\\Responses\\Errors\\Status401Response',
            404 => '\\GoCardlessSDK\\Responses\\Errors\\Status404Response',
            422 => '\\GoCardlessSDK\\Responses\\Errors\\Status422Response',
            500 => '\\GoCardlessSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status400Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status401Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status404Response',
                'schemaNullable' => false,
            ],
            422 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status422Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\GoCardlessSDK\\DTOs\\Customer\\BankAccountMultiResource\\Response',
        'querySerialization' => [
            'created_at' => 'deepObject',
        ],
    ];

    /**
     * List customer bank accounts
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of your bank accounts.
     */
    public function get(\GoCardlessSDK\GetParams\CustomerBankAccounts $params): \GoCardlessSDK\DTOs\Customer\BankAccountMultiResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Customer\BankAccountMultiResource\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/customer_bank_accounts',
        'security' => [
            [
                'bearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            400 => '\\GoCardlessSDK\\Responses\\Errors\\Status400Response',
            401 => '\\GoCardlessSDK\\Responses\\Errors\\Status401Response',
            404 => '\\GoCardlessSDK\\Responses\\Errors\\Status404Response',
            422 => '\\GoCardlessSDK\\Responses\\Errors\\Status422Response',
            500 => '\\GoCardlessSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status400Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status401Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status404Response',
                'schemaNullable' => false,
            ],
            422 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status422Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\GoCardlessSDK\\DTOs\\Customer\\BankAccountSingleResource\\Response',
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\CustomerBankAccounts\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

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
    public function post(\GoCardlessSDK\PostParams\CustomerBankAccounts $params): \GoCardlessSDK\DTOs\Customer\BankAccountSingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Customer\BankAccountSingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array GET_BY_CUSTOMER_BANK_ACCOUNT_ID = [
        'method' => 'GET',
        'path' => '/customer_bank_accounts/{customer_bank_account_id}',
        'security' => [
            [
                'bearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\GoCardlessSDK\\Responses\\Errors\\Status400Response',
            401 => '\\GoCardlessSDK\\Responses\\Errors\\Status401Response',
            404 => '\\GoCardlessSDK\\Responses\\Errors\\Status404Response',
            422 => '\\GoCardlessSDK\\Responses\\Errors\\Status422Response',
            500 => '\\GoCardlessSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status400Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status401Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status404Response',
                'schemaNullable' => false,
            ],
            422 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status422Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\GoCardlessSDK\\DTOs\\Customer\\BankAccountSingleResource\\Response',
    ];

    /**
     * Get a single customer bank account
     *
     * Retrieves the details of an existing bank account.
     */
    public function getByCustomerBankAccountId(string $customer_bank_account_id, \GoCardlessSDK\GetParams\CustomerBankAccounts\ByCustomerBankAccountId $params): \GoCardlessSDK\DTOs\Customer\BankAccountSingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Customer\BankAccountSingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_CUSTOMER_BANK_ACCOUNT_ID), path: ['customer_bank_account_id' => $customer_bank_account_id], parameters: $params);
        return $result;
    }

    private const array PUT_BY_CUSTOMER_BANK_ACCOUNT_ID = [
        'method' => 'PUT',
        'path' => '/customer_bank_accounts/{customer_bank_account_id}',
        'security' => [
            [
                'bearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\GoCardlessSDK\\Responses\\Errors\\Status400Response',
            401 => '\\GoCardlessSDK\\Responses\\Errors\\Status401Response',
            404 => '\\GoCardlessSDK\\Responses\\Errors\\Status404Response',
            422 => '\\GoCardlessSDK\\Responses\\Errors\\Status422Response',
            500 => '\\GoCardlessSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status400Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status401Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status404Response',
                'schemaNullable' => false,
            ],
            422 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status422Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\GoCardlessSDK\\DTOs\\Customer\\BankAccountSingleResource\\Response',
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\CustomerBankAccounts\\ByCustomerBankAccountId\\Put',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update a customer bank account
     *
     * Updates a customer bank account object. Only the metadata parameter is allowed.
     */
    public function putByCustomerBankAccountId(string $customer_bank_account_id, \GoCardlessSDK\PutParams\CustomerBankAccounts\ByCustomerBankAccountId $params): \GoCardlessSDK\DTOs\Customer\BankAccountSingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Customer\BankAccountSingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::PUT_BY_CUSTOMER_BANK_ACCOUNT_ID), path: ['customer_bank_account_id' => $customer_bank_account_id], parameters: $params);
        return $result;
    }
}
