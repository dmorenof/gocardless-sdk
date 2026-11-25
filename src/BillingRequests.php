<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class BillingRequests extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /billing_requests [operationId: list_billing_request] */
    /**
     * List Billing Requests
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of your billing requests.
     */
    public static function get(\GoCardlessSDK\GetParams\BillingRequests $params): \GoCardlessSDK\DTOs\BillingRequest\MultiResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\BillingRequests::class)->get($params);
    }

    /** POST /billing_requests [operationId: create_billing_request] */
    /**
     * Create a Billing Request
     *
     * <p class="notice"><strong>Important</strong>: All properties associated with <code>subscription_request</code> and <code>instalment_schedule_request</code> are only supported for ACH and PAD schemes.</p>
     *
     * <p class="notice"><strong>Note</strong>: Pay by Bank is only available for transactions in GBP with your customers in the UK and for EUR with your customers in supported Eurozone countries. We will be adding other countries soon.</p>
     *
     * <p class="notice--warning"><strong>Warning</strong>: by default, the ability to provide a custom mandate reference is switched off. The banking system rules for valid references are quite complex, and we recommend allowing GoCardless to generate it. If you would like to provide custom references, please contact support.</p>
     */
    public static function post(\GoCardlessSDK\PostParams\BillingRequests $params): \GoCardlessSDK\DTOs\BillingRequest\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\BillingRequests::class)->post($params);
    }

    /** GET /billing_requests/{billing_request_id} [operationId: get_billing_requests] */
    /**
     * Get a single Billing Request
     *
     * Fetches a billing request
     */
    public static function getByBillingRequestId(string $billing_request_id, \GoCardlessSDK\GetParams\BillingRequests\ByBillingRequestId $params): \GoCardlessSDK\DTOs\BillingRequest\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\BillingRequests::class)->getByBillingRequestId($billing_request_id, $params);
    }

}
