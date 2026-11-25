<?php

declare(strict_types=1);

namespace GoCardlessSDK\BillingRequests\ByBillingRequestId\Actions;

final class Notify extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /billing_requests/{billing_request_id}/actions/notify [operationId: notify_billing_request] */
    /**
     * Notify the customer
     *
     * Notifies the customer linked to the billing request, asking them to authorise it.
     * Currently, the customer can only be notified by email.
     *
     * This endpoint is currently supported only for Pay by Bank Billing Requests.
     */
    public static function post(string $billing_request_id, \GoCardlessSDK\PostParams\BillingRequests\ByBillingRequestId\Actions\Notify $params): \GoCardlessSDK\DTOs\BillingRequest\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\BillingRequests\ByBillingRequestId\Actions\Notify::class)->post($billing_request_id, $params);
    }
}
