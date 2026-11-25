<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources;

final class RedirectFlows extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/redirect_flows',
        'security' => [
            [
                'bearerAuth' => [],
            ],
        ],
        'success' => [
            201,
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\RedirectFlow\\SingleResource\\Response',
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\RedirectFlows\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create a redirect flow
     *
     * Creates a redirect flow object which can then be used to redirect your customer to the GoCardless hosted payment pages.
     *
     * **Deprecated:** Redirect Flows are legacy APIs and cannot be used by new integrators.
     * The [Billing Request flow](https://docs.gocardless.com/docs/api-reference/billing-request) API should be used for your payment flows.
     *
     * @deprecated
     */
    public function post(\GoCardlessSDK\PostParams\RedirectFlows $params): \GoCardlessSDK\DTOs\RedirectFlow\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\RedirectFlow\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array GET_BY_REDIRECT_FLOW_ID = [
        'method' => 'GET',
        'path' => '/redirect_flows/{redirect_flow_id}',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\RedirectFlow\\SingleResource\\Response',
    ];

    /**
     * Get a single redirect flow
     *
     * Returns all details about a single redirect flow
     *
     * **Deprecated:** Redirect Flows are legacy APIs and cannot be used by new integrators.
     * The [Billing Request flow](https://docs.gocardless.com/docs/api-reference/billing-request) API should be used for your payment flows.
     *
     * @deprecated
     */
    public function getByRedirectFlowId(string $redirect_flow_id, \GoCardlessSDK\GetParams\RedirectFlows\ByRedirectFlowId $params): \GoCardlessSDK\DTOs\RedirectFlow\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\RedirectFlow\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_REDIRECT_FLOW_ID), path: ['redirect_flow_id' => $redirect_flow_id], parameters: $params);
        return $result;
    }

}
