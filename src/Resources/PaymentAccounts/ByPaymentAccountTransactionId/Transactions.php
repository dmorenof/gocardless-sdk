<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources\PaymentAccounts\ByPaymentAccountTransactionId;

final class Transactions extends \GoCardlessSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/payment_accounts/{payment_account_transaction_id}/transactions',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\Payment\\AccountTransactionMultiResource\\Response',
    ];

    /**
     * List payment account transactions
     *
     * List transactions for a given payment account.
     */
    public function get(string $payment_account_transaction_id, \GoCardlessSDK\GetParams\PaymentAccounts\ByPaymentAccountTransactionId\Transactions $params): \GoCardlessSDK\DTOs\Payment\AccountTransactionMultiResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Payment\AccountTransactionMultiResource\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['payment_account_transaction_id' => $payment_account_transaction_id], parameters: $params);
        return $result;
    }

}
