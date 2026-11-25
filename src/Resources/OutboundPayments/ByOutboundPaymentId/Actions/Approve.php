<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources\OutboundPayments\ByOutboundPaymentId\Actions;

final class Approve extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/outbound_payments/{outbound_payment_id}/actions/approve',
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
            'type' => '\\GoCardlessSDK\\Requests\\OutboundPayments\\ByOutboundPaymentId\\Actions\\Approve\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Approve an outbound payment
     *
     * Approves an outbound payment. Only outbound payments with the "pending_approval" status can be approved.
     */
    public function post(string $outbound_payment_id, \GoCardlessSDK\PostParams\OutboundPayments\ByOutboundPaymentId\Actions\Approve $params): \GoCardlessSDK\DTOs\OutboundPayment\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\OutboundPayment\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['outbound_payment_id' => $outbound_payment_id], parameters: $params);
        return $result;
    }
}
