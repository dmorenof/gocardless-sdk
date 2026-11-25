<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources;

final class BankAccountDetails extends \GoCardlessSDK\Client
{
    private const array GET_BY_CUSTOMER_BANK_ACCOUNT_ID = [
        'method' => 'GET',
        'path' => '/bank_account_details/{customer_bank_account_id}',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\Bank\\AccountDetailSingleResource\\Response',
    ];

    /**
     * Get encrypted bank details
     *
     * Returns bank account details in the flattened JSON Web Encryption format described in RFC 7516.
     *
     * You must specify a `Gc-Key-Id` header when using this endpoint. See [Public Key Setup](https://docs.gocardless.com/docs/gc-embed/bank-details-access#public-key-setup) for more details.
     *
     * <p class="restricted-notice"><strong>Restricted</strong>: This endpoint is restricted to organisations with the Encrypted Bank Details Access upgrade</p>
     *
     * <p class="notice"><strong>Note</strong>: See our [Security Requirements](https://docs.gocardless.com/docs/api-reference/security-requirements) before using this feature</p>
     */
    public function getByCustomerBankAccountId(string $customer_bank_account_id, \GoCardlessSDK\GetParams\BankAccountDetails\ByCustomerBankAccountId $params): \GoCardlessSDK\DTOs\Bank\AccountDetailSingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Bank\AccountDetailSingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_CUSTOMER_BANK_ACCOUNT_ID), path: ['customer_bank_account_id' => $customer_bank_account_id], parameters: $params);
        return $result;
    }
}
