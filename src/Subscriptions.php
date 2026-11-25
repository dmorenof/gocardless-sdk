<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class Subscriptions extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /subscriptions [operationId: list_subscription] */
    /**
     * List subscriptions
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of your subscriptions. Please note if the subscriptions are related to customers who have been removed, they will not be shown in the response.
     */
    public static function get(\GoCardlessSDK\GetParams\Subscriptions $params): \GoCardlessSDK\DTOs\Subscription\MultiResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Subscriptions::class)->get($params);
    }

    /** POST /subscriptions [operationId: create_subscription] */
    /**
     * Create a subscription
     *
     * Creates a new subscription object
     */
    public static function post(\GoCardlessSDK\PostParams\Subscriptions $params): \GoCardlessSDK\DTOs\Subscription\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Subscriptions::class)->post($params);
    }

    /** GET /subscriptions/{subscription_id} [operationId: get_subscriptions] */
    /**
     * Get a single subscription
     *
     * Retrieves the details of a single subscription.
     */
    public static function getBySubscriptionId(string $subscription_id, \GoCardlessSDK\GetParams\Subscriptions\BySubscriptionId $params): \GoCardlessSDK\DTOs\Subscription\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Subscriptions::class)->getBySubscriptionId($subscription_id, $params);
    }

    /** PUT /subscriptions/{subscription_id} [operationId: update_subscriptions] */
    /**
     * Update a subscription
     *
     * Updates a subscription object.
     *
     * This fails with:
     *
     * - `validation_failed` if invalid data is provided when attempting to update a subscription.
     *
     * - `subscription_not_active` if the subscription is no longer active.
     *
     * - `subscription_already_ended` if the subscription has taken all payments.
     *
     * - `mandate_payments_require_approval` if the amount is being changed and the mandate requires approval.
     *
     * - `number_of_subscription_amendments_exceeded` error if the subscription amount has already been changed 10 times.
     *
     * - `forbidden` if the amount is being changed, and the subscription was created by an app and you are not authenticated as that app, or if the subscription was not created by an app and you are authenticated as an app
     *
     * - `resource_created_by_another_app` if the app fee is being changed, and the subscription was created by an app other than the app you are authenticated as
     *
     */
    public static function putBySubscriptionId(string $subscription_id, \GoCardlessSDK\PutParams\Subscriptions\BySubscriptionId $params): \GoCardlessSDK\DTOs\Subscription\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Subscriptions::class)->putBySubscriptionId($subscription_id, $params);
    }

}
