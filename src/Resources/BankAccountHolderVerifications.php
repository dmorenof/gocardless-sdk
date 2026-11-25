<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources;

final class BankAccountHolderVerifications extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/bank_account_holder_verifications',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\Bank\\AccountHolderVerificationSingleResource\\Response',
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\BankAccountHolderVerifications\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create a bank account holder verification.
     *
     * Verify the account holder of the bank account. A complete verification can be attached when creating an outbound payment.
     * This endpoint allows partner merchants to create Confirmation of Payee checks on customer bank accounts before sending outbound payments.
     *
     * <p class="restricted-notice"><strong>Restricted</strong>: This endpoint is restricted to organisations with Outbound Payments enabled</p>
     */
    public function post(\GoCardlessSDK\PostParams\BankAccountHolderVerifications $params): \GoCardlessSDK\DTOs\Bank\AccountHolderVerificationSingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Bank\AccountHolderVerificationSingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array GET_BY_BANK_ACCOUNT_HOLDER_VERIFICATION_ID = [
        'method' => 'GET',
        'path' => '/bank_account_holder_verifications/{bank_account_holder_verification_id}',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\Bank\\AccountHolderVerificationSingleResource\\Response',
    ];

    /**
     * Get a bank account holder verification.
     *
     * Fetches a bank account holder verification by ID.
     */
    public function getByBankAccountHolderVerificationId(string $bank_account_holder_verification_id, \GoCardlessSDK\GetParams\BankAccountHolderVerifications\ByBankAccountHolderVerificationId $params): \GoCardlessSDK\DTOs\Bank\AccountHolderVerificationSingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Bank\AccountHolderVerificationSingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_BANK_ACCOUNT_HOLDER_VERIFICATION_ID), path: ['bank_account_holder_verification_id' => $bank_account_holder_verification_id], parameters: $params);
        return $result;
    }

}
