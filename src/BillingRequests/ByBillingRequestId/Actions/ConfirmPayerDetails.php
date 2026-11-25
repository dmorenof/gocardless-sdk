<?php

declare(strict_types=1);

namespace GoCardlessSDK\BillingRequests\ByBillingRequestId\Actions;

final class ConfirmPayerDetails extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /billing_requests/{billing_request_id}/actions/confirm_payer_details [operationId: confirm_payer_details_billing_request] */
    /**
     * Confirm the payer details
     *
     * This is needed when you have a mandate request. As a scheme compliance rule we are required to
     * allow the payer to crosscheck the details entered by them and confirm it.
     *
     * <p class="restricted-notice"><strong>Restricted</strong>: this endpoint is restricted to [GoCardless Pro](https://gocardless.com/pricing) and [GoCardless Enterprise](https://gocardless.com/pricing) accounts with the [custom payment pages upgrade](https://hub.gocardless.com/s/article/Custom-payment-pages).</p>
     */
    public static function post(string $billing_request_id, \GoCardlessSDK\PostParams\BillingRequests\ByBillingRequestId\Actions\ConfirmPayerDetails $params): \GoCardlessSDK\DTOs\BillingRequest\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\BillingRequests\ByBillingRequestId\Actions\ConfirmPayerDetails::class)->post($billing_request_id, $params);
    }
}
