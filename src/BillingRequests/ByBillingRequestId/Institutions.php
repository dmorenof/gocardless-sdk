<?php

declare(strict_types=1);

namespace GoCardlessSDK\BillingRequests\ByBillingRequestId;

final class Institutions extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /billing_requests/{billing_request_id}/institutions [operationId: get_institutions_from_institution] */
    /**
     * List institutions for Billing Request
     *
     * Returns all institutions valid for a Billing Request.
     *
     * This endpoint is currently supported only for FasterPayments.
     *
     * <p class="restricted-notice"><strong>Restricted</strong>: this endpoint is restricted to [GoCardless Pro](https://gocardless.com/pricing) and [GoCardless Enterprise](https://gocardless.com/pricing) accounts with the [custom payment pages upgrade](https://hub.gocardless.com/s/article/Custom-payment-pages).</p>
     */
    public static function get(string $billing_request_id, \GoCardlessSDK\GetParams\BillingRequests\ByBillingRequestId\Institutions $params): \GoCardlessSDK\Responses\BillingRequests\ByBillingRequestId\Institutions\Get
    {
        return self::client()->resource(\GoCardlessSDK\Resources\BillingRequests\ByBillingRequestId\Institutions::class)->get($billing_request_id, $params);
    }

}
