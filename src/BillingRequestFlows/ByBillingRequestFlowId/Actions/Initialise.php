<?php

declare(strict_types=1);

namespace GoCardlessSDK\BillingRequestFlows\ByBillingRequestFlowId\Actions;

final class Initialise extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /billing_request_flows/{billing_request_flow_id}/actions/initialise [operationId: initialise_billing_request_flow] */
    /**
     * Initialise a Billing Request Flow
     *
     * Returns the flow having generated a fresh session token which can be used to power
     * integrations that manipulate the flow.
     */
    public static function post(string $billing_request_flow_id, \GoCardlessSDK\PostParams\BillingRequestFlows\ByBillingRequestFlowId\Actions\Initialise $params): \GoCardlessSDK\DTOs\BillingRequest\FlowSingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\BillingRequestFlows\ByBillingRequestFlowId\Actions\Initialise::class)->post($billing_request_flow_id, $params);
    }
}
