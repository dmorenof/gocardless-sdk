<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources\Subscriptions\BySubscriptionId\Actions;

final class Cancel extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/subscriptions/{subscription_id}/actions/cancel',
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
            'type' => '\\GoCardlessSDK\\Requests\\Subscriptions\\BySubscriptionId\\Actions\\Cancel\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

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
    public function post(string $subscription_id, \GoCardlessSDK\PostParams\Subscriptions\BySubscriptionId\Actions\Cancel $params): \GoCardlessSDK\DTOs\Subscription\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Subscription\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['subscription_id' => $subscription_id], parameters: $params);
        return $result;
    }

}
