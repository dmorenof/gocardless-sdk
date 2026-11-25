<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources\RedirectFlows\ByRedirectFlowId\Actions;

final class Complete extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/redirect_flows/{redirect_flow_id}/actions/complete',
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
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\RedirectFlows\\ByRedirectFlowId\\Actions\\Complete\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Complete a redirect flow
     *
     * This creates a [customer](https://docs.gocardless.com/docs/api-reference/customer), [customer bank account](https://docs.gocardless.com/docs/api-reference/customer-bank-account), and [mandate](https://docs.gocardless.com/docs/api-reference/mandate) using the details supplied by your customer and returns the ID of the created mandate.
     *
     * This will return a `redirect_flow_incomplete` error if your customer has not yet been redirected back to your site, and a `redirect_flow_already_completed` error if your integration has already completed this flow. It will return a `bad_request` error if the `session_token` differs to the one supplied when the redirect flow was created.
     *
     * **Deprecated:** Redirect Flows are legacy APIs and cannot be used by new integrators.
     * The [Billing Request flow](https://docs.gocardless.com/docs/api-reference/billing-request) API should be used for your payment flows.
     *
     * @deprecated
     */
    public function post(string $redirect_flow_id, \GoCardlessSDK\PostParams\RedirectFlows\ByRedirectFlowId\Actions\Complete $params): \GoCardlessSDK\DTOs\RedirectFlow\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\RedirectFlow\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['redirect_flow_id' => $redirect_flow_id], parameters: $params);
        return $result;
    }
}
