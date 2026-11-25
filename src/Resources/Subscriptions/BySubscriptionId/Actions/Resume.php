<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources\Subscriptions\BySubscriptionId\Actions;

final class Resume extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/subscriptions/{subscription_id}/actions/resume',
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
            'type' => '\\GoCardlessSDK\\Requests\\Subscriptions\\BySubscriptionId\\Actions\\Resume\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

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
    public function post(string $subscription_id, \GoCardlessSDK\PostParams\Subscriptions\BySubscriptionId\Actions\Resume $params): \GoCardlessSDK\DTOs\Subscription\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Subscription\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['subscription_id' => $subscription_id], parameters: $params);
        return $result;
    }

}
