<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class BillingRequestFlows extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /billing_request_flows [operationId: create_billing_request_flow] */
    /**
     * Create a Billing Request Flow
     *
     * Creates a new billing request flow.
     */
    public static function post(\GoCardlessSDK\PostParams\BillingRequestFlows $params): \GoCardlessSDK\DTOs\BillingRequest\FlowSingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\BillingRequestFlows::class)->post($params);
    }

}
