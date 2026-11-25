<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources\BillingRequests\ByBillingRequestId\Actions;

final class Fulfil extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/billing_requests/{billing_request_id}/actions/fulfil',
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
            'type' => '\\GoCardlessSDK\\Requests\\BillingRequests\\ByBillingRequestId\\Actions\\Fulfil\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Fulfil a Billing Request
     *
     * If a billing request is ready to be fulfilled, call this endpoint to cause
     * it to fulfil, executing the payment.
     */
    public function post(string $billing_request_id, \GoCardlessSDK\PostParams\BillingRequests\ByBillingRequestId\Actions\Fulfil $params): \GoCardlessSDK\DTOs\BillingRequest\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\BillingRequest\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['billing_request_id' => $billing_request_id], parameters: $params);
        return $result;
    }
}
