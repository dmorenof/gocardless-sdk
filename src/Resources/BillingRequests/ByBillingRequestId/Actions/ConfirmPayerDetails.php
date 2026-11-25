<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources\BillingRequests\ByBillingRequestId\Actions;

final class ConfirmPayerDetails extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/billing_requests/{billing_request_id}/actions/confirm_payer_details',
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
            'type' => '\\GoCardlessSDK\\Requests\\BillingRequests\\ByBillingRequestId\\Actions\\ConfirmPayerDetails\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Confirm the payer details
     *
     * This is needed when you have a mandate request. As a scheme compliance rule we are required to
     * allow the payer to crosscheck the details entered by them and confirm it.
     *
     * <p class="restricted-notice"><strong>Restricted</strong>: this endpoint is restricted to [GoCardless Pro](https://gocardless.com/pricing) and [GoCardless Enterprise](https://gocardless.com/pricing) accounts with the [custom payment pages upgrade](https://hub.gocardless.com/s/article/Custom-payment-pages).</p>
     */
    public function post(string $billing_request_id, \GoCardlessSDK\PostParams\BillingRequests\ByBillingRequestId\Actions\ConfirmPayerDetails $params): \GoCardlessSDK\DTOs\BillingRequest\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\BillingRequest\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['billing_request_id' => $billing_request_id], parameters: $params);
        return $result;
    }
}
