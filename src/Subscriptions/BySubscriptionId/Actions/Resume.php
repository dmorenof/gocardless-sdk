<?php

declare(strict_types=1);

namespace GoCardlessSDK\Subscriptions\BySubscriptionId\Actions;

final class Resume extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /subscriptions/{subscription_id}/actions/resume [operationId: resume_subscription] */
    /**
     * Resume a subscription
     *
     * Resume a subscription object.
     * Payments will start to be created again based on the subscriptions recurrence rules.
     * The `charge_date` on the next payment will be the same as the subscriptions `earliest_charge_date_after_resume`
     *
     * This fails with:
     *
     * - `forbidden` if the subscription was created by an app and you are not authenticated as that app, or if the subscription was not created by an app and you are authenticated as an app
     *
     * - `validation_failed` if invalid data is provided when attempting to resume a subscription.
     *
     * - `subscription_not_paused` if the subscription is not paused.
     *
     *
     * <p class="notice--warning"><strong>Warning</strong>: There is a mandatory minimum 14 business day wait between resuming an `AUD` subscription and its next charge date.
     * There is a mandatory minimum 10 calendar day wait between resuming an `NZD` subscription and its next charge date.</p>
     */
    public static function post(string $subscription_id, \GoCardlessSDK\PostParams\Subscriptions\BySubscriptionId\Actions\Resume $params): \GoCardlessSDK\DTOs\Subscription\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Subscriptions\BySubscriptionId\Actions\Resume::class)->post($subscription_id, $params);
    }
}
