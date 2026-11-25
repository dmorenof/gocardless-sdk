<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources\BillingRequests\ByBillingRequestId\Actions;

final class CollectCustomerDetails extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/billing_requests/{billing_request_id}/actions/collect_customer_details',
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
            'type' => '\\GoCardlessSDK\\Requests\\BillingRequests\\ByBillingRequestId\\Actions\\CollectCustomerDetails\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Collect customer details
     *
     * If the billing request has a pending <code>collect_customer_details</code>
     * action, this endpoint can be used to collect the details in order to
     * complete it.
     *
     * The endpoint takes the same payload as Customers, but checks that the
     * customer fields are populated correctly for the billing request scheme.
     *
     * Whatever is provided to this endpoint is used to update the referenced
     * customer, and will take effect immediately after the request is
     * successful.
     */
    public function post(string $billing_request_id, \GoCardlessSDK\PostParams\BillingRequests\ByBillingRequestId\Actions\CollectCustomerDetails $params): \GoCardlessSDK\DTOs\BillingRequest\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\BillingRequest\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['billing_request_id' => $billing_request_id], parameters: $params);
        return $result;
    }
}
