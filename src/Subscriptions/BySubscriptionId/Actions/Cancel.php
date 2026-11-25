<?php

declare(strict_types=1);

namespace GoCardlessSDK\Subscriptions\BySubscriptionId\Actions;

final class Cancel extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /subscriptions/{subscription_id}/actions/cancel [operationId: cancel_subscription] */
    /**
     * Cancel a subscription
     *
     * Immediately cancels a subscription; no more payments will be created under it. Any metadata supplied to this endpoint will be stored on the payment cancellation event it causes.
     *
     * This will fail with a cancellation_failed error if the subscription is already cancelled or finished.
     *
     * <p class="notice--warning"><strong>Warning</strong>: Please note that this will not cancel any payments that have already been created
     * from this subscription — these payments will still be collected unless you also
     * manually cancel them.</p>
     */
    public static function post(string $subscription_id, \GoCardlessSDK\PostParams\Subscriptions\BySubscriptionId\Actions\Cancel $params): \GoCardlessSDK\DTOs\Subscription\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Subscriptions\BySubscriptionId\Actions\Cancel::class)->post($subscription_id, $params);
    }

}
