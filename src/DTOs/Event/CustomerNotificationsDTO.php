<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Event;

final class CustomerNotificationsDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Time after which GoCardless will send the notification by email.
     * Format: date-time
     */
    public string $deadline;
    /**
     * The id of the notification.
     */
    public string $id;
    /**
     * Whether or not the notification must be sent.
     */
    public bool $mandatory;
    /**
     * See [here](https://docs.gocardless.com/docs/api-reference/customer-notification) for a complete list of customer notification types.
     */
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'deadline' => is_string($value) ? $this->deadline = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'mandatory' => is_bool($value) ? $this->mandatory = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
