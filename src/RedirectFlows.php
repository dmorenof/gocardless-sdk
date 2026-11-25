<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class RedirectFlows extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /redirect_flows [operationId: create_redirect_flow] */
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
    public static function post(\GoCardlessSDK\PostParams\RedirectFlows $params): \GoCardlessSDK\DTOs\RedirectFlow\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\RedirectFlows::class)->post($params);
    }

    /** GET /redirect_flows/{redirect_flow_id} [operationId: get_redirect_flows] */
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
    public static function getByRedirectFlowId(string $redirect_flow_id, \GoCardlessSDK\GetParams\RedirectFlows\ByRedirectFlowId $params): \GoCardlessSDK\DTOs\RedirectFlow\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\RedirectFlows::class)->getByRedirectFlowId($redirect_flow_id, $params);
    }

}
