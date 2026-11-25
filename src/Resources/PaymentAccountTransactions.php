<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources;

final class PaymentAccountTransactions extends \GoCardlessSDK\Client
{
    private const array GET_BY_PAYMENT_ACCOUNT_TRANSACTION_ID = [
        'method' => 'GET',
        'path' => '/payment_account_transactions/{payment_account_transaction_id}',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\Payment\\AccountTransactionSingleResource\\Response',
    ];

    /**
     * Get a single payment account transaction
     *
     * Retrieves the details of an existing payment account transaction.
     */
    public function getByPaymentAccountTransactionId(string $payment_account_transaction_id, \GoCardlessSDK\GetParams\PaymentAccountTransactions\ByPaymentAccountTransactionId $params): \GoCardlessSDK\DTOs\Payment\AccountTransactionSingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Payment\AccountTransactionSingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_PAYMENT_ACCOUNT_TRANSACTION_ID), path: ['payment_account_transaction_id' => $payment_account_transaction_id], parameters: $params);
        return $result;
    }

}
