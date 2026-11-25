<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Customer\NotificationSingleResource;

/**
 * CustomerNotificationSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Customer\Notification $customer_notifications;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customer_notifications' => $value instanceof \stdClass ? $this->customer_notifications = new \GoCardlessSDK\DTOs\Customer\Notification($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
