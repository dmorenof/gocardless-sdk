<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources\CustomerBankAccounts\ByCustomerBankAccountId\Actions;

final class Disable extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/customer_bank_accounts/{customer_bank_account_id}/actions/disable',
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
     * Disable a customer bank account
     *
     * Immediately cancels all associated mandates and cancellable payments.
     *
     * This will return a `disable_failed` error if the bank account has already been disabled.
     *
     * A disabled bank account can be re-enabled by creating a new bank account resource with the same details.
     */
    public function post(string $customer_bank_account_id, \GoCardlessSDK\PostParams\CustomerBankAccounts\ByCustomerBankAccountId\Actions\Disable $params): \GoCardlessSDK\DTOs\Customer\BankAccountSingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Customer\BankAccountSingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['customer_bank_account_id' => $customer_bank_account_id], parameters: $params);
        return $result;
    }
}
