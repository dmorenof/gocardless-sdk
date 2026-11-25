<?php

declare(strict_types=1);

namespace GoCardlessSDK\CustomerNotifications\ByCustomerNotificationId\Actions;

final class Handle extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /customer_notifications/{customer_notification_id}/actions/handle [operationId: handle_customer_notification] */
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
    public static function post(string $customer_notification_id, \GoCardlessSDK\PostParams\CustomerNotifications\ByCustomerNotificationId\Actions\Handle $params): \GoCardlessSDK\DTOs\Customer\NotificationSingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\CustomerNotifications\ByCustomerNotificationId\Actions\Handle::class)->post($customer_notification_id, $params);
    }
}
