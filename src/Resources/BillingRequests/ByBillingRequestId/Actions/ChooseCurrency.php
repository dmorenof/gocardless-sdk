<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources\BillingRequests\ByBillingRequestId\Actions;

final class ChooseCurrency extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/billing_requests/{billing_request_id}/actions/choose_currency',
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
            'type' => '\\GoCardlessSDK\\Requests\\BillingRequests\\ByBillingRequestId\\Actions\\ChooseCurrency\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Change currency
     *
     * This will allow for the updating of the currency and subsequently the scheme if
     * needed for a Billing Request. This will only be available for mandate only flows
     * which do not have the lock_currency flag set to true on the Billing Request Flow. It
     * will also not support any request which has a payments request.
     */
    public function post(string $billing_request_id, \GoCardlessSDK\PostParams\BillingRequests\ByBillingRequestId\Actions\ChooseCurrency $params): \GoCardlessSDK\DTOs\BillingRequest\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\BillingRequest\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['billing_request_id' => $billing_request_id], parameters: $params);
        return $result;
    }
}
