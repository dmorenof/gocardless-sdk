<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources\OutboundPayments\ByOutboundPaymentId\Actions;

final class Cancel extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/outbound_payments/{outbound_payment_id}/actions/cancel',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\OutboundPayment\\SingleResource\\Response',
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\OutboundPayments\\ByOutboundPaymentId\\Actions\\Cancel\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Cancel an outbound payment
     *
     * Cancels an outbound payment. Only outbound payments with either `verifying`, `pending_approval`, or `scheduled` status can be cancelled.
     * Once an outbound payment is `executing`, the money moving process has begun and cannot be reversed.
     */
    public function post(string $outbound_payment_id, \GoCardlessSDK\PostParams\OutboundPayments\ByOutboundPaymentId\Actions\Cancel $params): \GoCardlessSDK\DTOs\OutboundPayment\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\OutboundPayment\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['outbound_payment_id' => $outbound_payment_id], parameters: $params);
        return $result;
    }

}
