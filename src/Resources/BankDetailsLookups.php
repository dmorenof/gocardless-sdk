<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources;

final class BankDetailsLookups extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/bank_details_lookups',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\Bank\\DetailsLookupSingleResource\\Response',
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\BankDetailsLookups\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Perform a bank details lookup
     *
     * Performs a bank details lookup. As part of the lookup, a modulus check and
     * reachability check are performed.
     *
     * For UK or Eurozone-based bank accounts, where an account holder name is provided
     * (and an account number, a sort code or an IBAN are already present), we verify that
     * the account holder name and bank account number match the details held by the relevant bank.
     * If there is no match, the endpoint will return a 422 - validation error on account_holder_name:
     * "Account holder name does not match bank account details provided".
     *
     * If your request returns an [error](https://docs.gocardless.com/docs/api-reference/responses-and-errors) or the `available_debit_schemes`
     * attribute is an empty array, you will not be able to collect payments from the
     * specified bank account. GoCardless may be able to collect payments from an account
     * even if no `bic` is returned.
     *
     * Bank account details may be supplied using [local details](https://docs.gocardless.com/docs/api-reference/local-bank-details) or an IBAN.
     *
     * _ACH scheme_ For compliance reasons, an extra validation step is done using
     * a third-party provider to make sure the customer's bank account can accept
     * Direct Debit. If a bank account is discovered to be closed or invalid, the
     * customer is requested to adjust the account number/routing number and
     * succeed in this check to continue with the flow.
     *
     * _Note:_ Usage of this endpoint is monitored. If your organisation relies on GoCardless for
     * modulus or reachability checking but not for payment collection, please get in touch.
     */
    public function post(\GoCardlessSDK\PostParams\BankDetailsLookups $params): \GoCardlessSDK\DTOs\Bank\DetailsLookupSingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Bank\DetailsLookupSingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

}
