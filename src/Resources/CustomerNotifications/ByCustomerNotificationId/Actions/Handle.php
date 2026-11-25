<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources\CustomerNotifications\ByCustomerNotificationId\Actions;

final class Handle extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/customer_notifications/{customer_notification_id}/actions/handle',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\Customer\\NotificationSingleResource\\Response',
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\CustomerNotifications\\ByCustomerNotificationId\\Actions\\Handle\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Handle a notification
     *
     * "Handling" a notification means that you have sent the notification yourself (and
     * don't want GoCardless to send it).
     * If the notification has already been actioned, or the deadline to notify has passed,
     * this endpoint will return an `already_actioned` error and you should not take
     * further action. This endpoint takes no additional parameters.
     *
     */
    public function post(string $customer_notification_id, \GoCardlessSDK\PostParams\CustomerNotifications\ByCustomerNotificationId\Actions\Handle $params): \GoCardlessSDK\DTOs\Customer\NotificationSingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Customer\NotificationSingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['customer_notification_id' => $customer_notification_id], parameters: $params);
        return $result;
    }

}
