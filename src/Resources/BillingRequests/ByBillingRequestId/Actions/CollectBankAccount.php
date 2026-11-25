<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources\BillingRequests\ByBillingRequestId\Actions;

final class CollectBankAccount extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/billing_requests/{billing_request_id}/actions/collect_bank_account',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\BillingRequest\\SingleResource\\Response',
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\BillingRequests\\ByBillingRequestId\\Actions\\CollectBankAccount\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Collect bank account details
     *
     * If the billing request has a pending
     * <code>collect_bank_account</code> action, this endpoint can be
     * used to collect the details in order to complete it.
     *
     * The endpoint takes the same payload as Customer Bank Accounts, but check
     * the bank account is valid for the billing request scheme before creating
     * and attaching it.
     *
     * If the scheme is PayTo and the pay_id is available, this can be included in the payload along with the
     * country_code.
     *
     * _ACH scheme_ For compliance reasons, an extra validation step is done using
     * a third-party provider to make sure the customer's bank account can accept
     * Direct Debit. If a bank account is discovered to be closed or invalid, the
     * customer is requested to adjust the account number/routing number and
     * succeed in this check to continue with the flow.
     *
     * _BACS and SEPA schemes_ [Payer Name Verification](https://hub.gocardless.com/s/article/Introduction-to-Payer-Name-Verification?language=en_GB)
     * is enabled by default for UK and Eurozone based bank accounts, meaning we verify the account holder name and bank account number/IBAN match
     * the details held by the relevant bank. If there is no match, the endpoint will return a 422 - validation error on account_holder_name:
     * "Account holder name does not match bank account details provided". Testing instructions are [here](https://docs.gocardless.com/docs/developer-resources/scenario-simulators#payer-name-verification)
     */
    public function post(string $billing_request_id, \GoCardlessSDK\PostParams\BillingRequests\ByBillingRequestId\Actions\CollectBankAccount $params): \GoCardlessSDK\DTOs\BillingRequest\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\BillingRequest\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['billing_request_id' => $billing_request_id], parameters: $params);
        return $result;
    }

}
