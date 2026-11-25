<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources\Payments\ByPaymentId\Actions;

final class Cancel extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/payments/{payment_id}/actions/cancel',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\Payment\\SingleResource\\Response',
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\Payments\\ByPaymentId\\Actions\\Cancel\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Cancel a payment
     *
     * Cancels the payment if it has not already been submitted to the banks. Any metadata supplied to this endpoint will be stored on the payment cancellation event it causes.
     *
     * This will fail with a `cancellation_failed` error unless the payment's status is `pending_submission`.
     */
    public function post(string $payment_id, \GoCardlessSDK\PostParams\Payments\ByPaymentId\Actions\Cancel $params): \GoCardlessSDK\DTOs\Payment\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Payment\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['payment_id' => $payment_id], parameters: $params);
        return $result;
    }
}
