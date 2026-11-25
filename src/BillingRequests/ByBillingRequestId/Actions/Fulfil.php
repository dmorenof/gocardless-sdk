<?php

declare(strict_types=1);

namespace GoCardlessSDK\BillingRequests\ByBillingRequestId\Actions;

final class Fulfil extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /billing_requests/{billing_request_id}/actions/fulfil [operationId: fulfil_billing_request] */
    /**
     * Fulfil a Billing Request
     *
     * If a billing request is ready to be fulfilled, call this endpoint to cause
     * it to fulfil, executing the payment.
     */
    public static function post(string $billing_request_id, \GoCardlessSDK\PostParams\BillingRequests\ByBillingRequestId\Actions\Fulfil $params): \GoCardlessSDK\DTOs\BillingRequest\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\BillingRequests\ByBillingRequestId\Actions\Fulfil::class)->post($billing_request_id, $params);
    }
}
