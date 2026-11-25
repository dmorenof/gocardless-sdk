<?php

declare(strict_types=1);

namespace GoCardlessSDK\BillingRequests\ByBillingRequestId\Actions;

final class CollectCustomerDetails extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /billing_requests/{billing_request_id}/actions/collect_customer_details [operationId: collect_customer_details_billing_request] */
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
    public static function post(string $billing_request_id, \GoCardlessSDK\PostParams\BillingRequests\ByBillingRequestId\Actions\CollectCustomerDetails $params): \GoCardlessSDK\DTOs\BillingRequest\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\BillingRequests\ByBillingRequestId\Actions\CollectCustomerDetails::class)->post($billing_request_id, $params);
    }
}
