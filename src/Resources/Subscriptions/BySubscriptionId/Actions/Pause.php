<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources\Subscriptions\BySubscriptionId\Actions;

final class Pause extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/subscriptions/{subscription_id}/actions/pause',
        'security' => [
            [
                'bearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\GoCardlessSDK\\Responses\\Errors\\Status400Response',
            401 => '\\GoCardlessSDK\\Responses\\Errors\\Status401Response',
            404 => '\\GoCardlessSDK\\Responses\\Errors\\Status404Response',
            422 => '\\GoCardlessSDK\\Responses\\Errors\\Status422Response',
            500 => '\\GoCardlessSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status400Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status401Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status404Response',
                'schemaNullable' => false,
            ],
            422 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status422Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\GoCardlessSDK\\DTOs\\Subscription\\SingleResource\\Response',
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\Subscriptions\\BySubscriptionId\\Actions\\Pause\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Pause a subscription
     *
     * Pause a subscription object.
     * No payments will be created until it is resumed.
     *
     * This can only be used when a subscription is collecting a fixed number of payments (created using `count`),
     * when they continue forever (created without `count` or `end_date`) or
     * the subscription is already paused for a number of cycles.
     *
     * When `pause_cycles` is omitted the subscription is paused until the [resume endpoint](https://docs.gocardless.com/docs/api-reference/subscription#resume-a-subscription) is called.
     * If the subscription is collecting a fixed number of payments, `end_date` will be set to `null`.
     * When paused indefinitely, `upcoming_payments` will be empty.
     *
     * When `pause_cycles` is provided the subscription will be paused for the number of cycles requested.
     * If the subscription is collecting a fixed number of payments, `end_date` will be set to a new value.
     * When paused for a number of cycles, `upcoming_payments` will still contain the upcoming charge dates.
     *
     * This fails with:
     *
     * - `forbidden` if the subscription was created by an app and you are not authenticated as that app, or if the subscription was not created by an app and you are authenticated as an app
     *
     * - `validation_failed` if invalid data is provided when attempting to pause a subscription.
     *
     * - `subscription_paused_cannot_update_cycles` if the subscription is already paused for a number of cycles and the request provides a value for `pause_cycle`.
     *
     * - `subscription_cannot_be_paused` if the subscription cannot be paused.
     *
     * - `subscription_already_ended` if the subscription has taken all payments.
     *
     * - `pause_cycles_must_be_greater_than_or_equal_to` if the provided value for `pause_cycles` cannot be satisfied.
     *
     * <p class="notice--warning"><strong>Warning</strong>: Please note that any payments that have already been created from this
     * subscription will still be collected unless you manually cancel them.</p>
     */
    public function post(string $subscription_id, \GoCardlessSDK\PostParams\Subscriptions\BySubscriptionId\Actions\Pause $params): \GoCardlessSDK\DTOs\Subscription\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Subscription\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['subscription_id' => $subscription_id], parameters: $params);
        return $result;
    }

}
