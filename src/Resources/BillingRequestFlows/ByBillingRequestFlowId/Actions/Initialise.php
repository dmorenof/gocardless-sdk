<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources\BillingRequestFlows\ByBillingRequestFlowId\Actions;

final class Initialise extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/billing_request_flows/{billing_request_flow_id}/actions/initialise',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\BillingRequest\\FlowSingleResource\\Response',
    ];

    /**
     * Initialise a Billing Request Flow
     *
     * Returns the flow having generated a fresh session token which can be used to power
     * integrations that manipulate the flow.
     */
    public function post(string $billing_request_flow_id, \GoCardlessSDK\PostParams\BillingRequestFlows\ByBillingRequestFlowId\Actions\Initialise $params): \GoCardlessSDK\DTOs\BillingRequest\FlowSingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\BillingRequest\FlowSingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['billing_request_flow_id' => $billing_request_flow_id], parameters: $params);
        return $result;
    }

}
