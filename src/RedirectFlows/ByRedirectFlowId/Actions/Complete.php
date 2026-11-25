<?php

declare(strict_types=1);

namespace GoCardlessSDK\RedirectFlows\ByRedirectFlowId\Actions;

final class Complete extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /redirect_flows/{redirect_flow_id}/actions/complete [operationId: complete_redirect_flow] */
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
    public static function post(string $redirect_flow_id, \GoCardlessSDK\PostParams\RedirectFlows\ByRedirectFlowId\Actions\Complete $params): \GoCardlessSDK\DTOs\RedirectFlow\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\RedirectFlows\ByRedirectFlowId\Actions\Complete::class)->post($redirect_flow_id, $params);
    }

}
