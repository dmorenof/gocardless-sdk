<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Customer;

/**
 * Customer Notifications
 *
 * Customer Notifications represent the notification which is due to be sent to a customer
 * after an event has happened. The event, the resource and the customer to be notified
 * are all identified in the `links` property.
 *
 * Only `payment_created`, `mandate_created` and `subscription_created` notifications are
 * supported.
 *
 * Note that these are ephemeral records - once the notification has been actioned in some
 * way, it is no longer visible using this API.
 *
 * <p class="restricted-notice"><strong>Restricted</strong>: This API is currently only available for approved integrators - please <a href="mailto:help&#64;gocardless.com">get in touch</a> if you would like to use this API.</p>
 */
final class Notification extends \Dmorenof\SdkRuntime\DTO
{
    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \GoCardlessSDK\Enums\Customer\NotificationActionTaken $action_taken;
    /**
     * Fixed [timestamp](https://docs.gocardless.com/docs/api-reference/data-conventions#dates-and-times), recording when this
     * action was taken.
     * Format: date-time
     */
    public ?string $action_taken_at;
    /**
     * A string identifying the integrator who was able to handle this notification.
     */
    public ?string $action_taken_by;
    /**
     * The id of the notification.
     */
    public string $id;
    public \GoCardlessSDK\DTOs\Customer\NotificationLinks $links;
    public \GoCardlessSDK\Enums\Customer\NotificationType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'action_taken' => is_string($value) ? $this->action_taken = \GoCardlessSDK\Enums\Customer\NotificationActionTaken::from($value) : parent::assignMember($name, $value),
            'action_taken_at' => $value === null || is_string($value) ? $this->action_taken_at = $value : parent::assignMember($name, $value),
            'action_taken_by' => $value === null || is_string($value) ? $this->action_taken_by = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'links' => $value instanceof \stdClass ? $this->links = new \GoCardlessSDK\DTOs\Customer\NotificationLinks($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \GoCardlessSDK\Enums\Customer\NotificationType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
