<?php

declare(strict_types=1);

namespace GoCardlessSDK\BillingRequests\ByBillingRequestId\Actions;

final class ChooseCurrency extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /billing_requests/{billing_request_id}/actions/choose_currency [operationId: choose_currency_billing_request] */
    /**
     * Change currency
     *
     * This will allow for the updating of the currency and subsequently the scheme if
     * needed for a Billing Request. This will only be available for mandate only flows
     * which do not have the lock_currency flag set to true on the Billing Request Flow. It
     * will also not support any request which has a payments request.
     */
    public static function post(string $billing_request_id, \GoCardlessSDK\PostParams\BillingRequests\ByBillingRequestId\Actions\ChooseCurrency $params): \GoCardlessSDK\DTOs\BillingRequest\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\BillingRequests\ByBillingRequestId\Actions\ChooseCurrency::class)->post($billing_request_id, $params);
    }

}
