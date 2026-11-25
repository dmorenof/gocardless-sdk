<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources\Payments\ByPaymentId\Actions;

final class Retry extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/payments/{payment_id}/actions/retry',
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
            'type' => '\\GoCardlessSDK\\Requests\\Payments\\ByPaymentId\\Actions\\Retry\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Retry a payment
     *
     * <a name="retry_failed"></a>Retries a failed payment if the underlying mandate is active. You will receive a `resubmission_requested` webhook, but after that retrying the payment follows the same process as its initial creation, so you will receive a `submitted` webhook, followed by a `confirmed` or `failed` event. Any metadata supplied to this endpoint will be stored against the payment submission event it causes.
     *
     * This will return a `retry_failed` error if the payment has not failed.
     *
     * Payments can be retried up to 3 times.
     */
    public function post(string $payment_id, \GoCardlessSDK\PostParams\Payments\ByPaymentId\Actions\Retry $params): \GoCardlessSDK\DTOs\Payment\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Payment\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['payment_id' => $payment_id], parameters: $params);
        return $result;
    }

}
