<?php

declare(strict_types=1);

namespace GoCardlessSDK\BillingRequests\ByBillingRequestId\Actions;

final class SelectInstitution extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /billing_requests/{billing_request_id}/actions/select_institution [operationId: select_institution_billing_request] */
    /**
     * Select institution for a Billing Request
     *
     * Creates an Institution object and attaches it to the Billing Request
     *
     * <p class="restricted-notice"><strong>Restricted</strong>: this endpoint is restricted to [GoCardless Pro](https://gocardless.com/pricing) and [GoCardless Enterprise](https://gocardless.com/pricing) accounts with the [custom payment pages upgrade](https://hub.gocardless.com/s/article/Custom-payment-pages).</p>
     */
    public static function post(string $billing_request_id, \GoCardlessSDK\PostParams\BillingRequests\ByBillingRequestId\Actions\SelectInstitution $params): \GoCardlessSDK\DTOs\BillingRequest\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\BillingRequests\ByBillingRequestId\Actions\SelectInstitution::class)->post($billing_request_id, $params);
    }

}
