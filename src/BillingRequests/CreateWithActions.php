<?php

declare(strict_types=1);

namespace GoCardlessSDK\BillingRequests;

final class CreateWithActions extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /billing_requests/create_with_actions [operationId: create_with_actions_billing_requests] */
    /**
     * Create a Billing Request with Actions
     *
     * Creates a billing request and completes any specified actions in a single request.
     * This endpoint allows you to create a billing request and immediately complete actions
     * such as collecting customer details, bank account details, or other required actions.
     *
     * <p class="restricted-notice"><strong>Restricted</strong>: this endpoint is restricted to [GoCardless Pro](https://gocardless.com/pricing) and [GoCardless Enterprise](https://gocardless.com/pricing) accounts with the [custom payment pages upgrade](https://hub.gocardless.com/s/article/Custom-payment-pages).</p>
     *
     * <p class="notice"><strong>Note</strong>: to modify data on an already created billing request, call individual action endpoints. Calling this endpoint creates a new billing request everytime.</p>
     *
     * <p class="notice--warning"><strong>Warning</strong>: ACH/PAD is not supported on this endpoint.</p>
     */
    public static function post(\GoCardlessSDK\PostParams\BillingRequests\CreateWithActions $params): \GoCardlessSDK\DTOs\BillingRequest\WithActionSingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\BillingRequests\CreateWithActions::class)->post($params);
    }
}
