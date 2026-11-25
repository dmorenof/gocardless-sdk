<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources;

final class Subscriptions extends \GoCardlessSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/subscriptions',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\Subscription\\MultiResource\\Response',
        'querySerialization' => [
            'created_at' => 'deepObject',
        ],
    ];

    /**
     * List subscriptions
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of your subscriptions. Please note if the subscriptions are related to customers who have been removed, they will not be shown in the response.
     */
    public function get(\GoCardlessSDK\GetParams\Subscriptions $params): \GoCardlessSDK\DTOs\Subscription\MultiResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Subscription\MultiResource\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/subscriptions',
        'security' => [
            [
                'bearerAuth' => [],
            ],
        ],
        'success' => [
            201,
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
            'type' => '\\GoCardlessSDK\\Requests\\Subscriptions\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create a subscription
     *
     * Creates a new subscription object
     */
    public function post(\GoCardlessSDK\PostParams\Subscriptions $params): \GoCardlessSDK\DTOs\Subscription\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Subscription\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array GET_BY_SUBSCRIPTION_ID = [
        'method' => 'GET',
        'path' => '/subscriptions/{subscription_id}',
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
    ];

    /**
     * Get a single subscription
     *
     * Retrieves the details of a single subscription.
     */
    public function getBySubscriptionId(string $subscription_id, \GoCardlessSDK\GetParams\Subscriptions\BySubscriptionId $params): \GoCardlessSDK\DTOs\Subscription\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Subscription\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_SUBSCRIPTION_ID), path: ['subscription_id' => $subscription_id], parameters: $params);
        return $result;
    }

    private const array PUT_BY_SUBSCRIPTION_ID = [
        'method' => 'PUT',
        'path' => '/subscriptions/{subscription_id}',
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
            'type' => '\\GoCardlessSDK\\Requests\\Subscriptions\\BySubscriptionId\\Put',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

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
    public function putBySubscriptionId(string $subscription_id, \GoCardlessSDK\PutParams\Subscriptions\BySubscriptionId $params): \GoCardlessSDK\DTOs\Subscription\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Subscription\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::PUT_BY_SUBSCRIPTION_ID), path: ['subscription_id' => $subscription_id], parameters: $params);
        return $result;
    }
}
