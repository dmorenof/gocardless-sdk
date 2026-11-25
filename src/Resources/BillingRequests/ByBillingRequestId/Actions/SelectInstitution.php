<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources\BillingRequests\ByBillingRequestId\Actions;

final class SelectInstitution extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/billing_requests/{billing_request_id}/actions/select_institution',
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
            'type' => '\\GoCardlessSDK\\Requests\\BillingRequests\\ByBillingRequestId\\Actions\\SelectInstitution\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Select institution for a Billing Request
     *
     * Creates an Institution object and attaches it to the Billing Request
     *
     * <p class="restricted-notice"><strong>Restricted</strong>: this endpoint is restricted to [GoCardless Pro](https://gocardless.com/pricing) and [GoCardless Enterprise](https://gocardless.com/pricing) accounts with the [custom payment pages upgrade](https://hub.gocardless.com/s/article/Custom-payment-pages).</p>
     */
    public function post(string $billing_request_id, \GoCardlessSDK\PostParams\BillingRequests\ByBillingRequestId\Actions\SelectInstitution $params): \GoCardlessSDK\DTOs\BillingRequest\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\BillingRequest\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['billing_request_id' => $billing_request_id], parameters: $params);
        return $result;
    }
}
