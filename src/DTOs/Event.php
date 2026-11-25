<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs;

/**
 * Events
 *
 * Events are stored for all webhooks. An event refers to a resource which has been updated, for example a payment which has been collected, or a mandate which has been transferred. Event creation is an asynchronous process, so it can take some time between an action occurring and its corresponding event getting included in API responses. See [here](https://docs.gocardless.com/docs/api-reference/events) for a complete list of event types.
 * <p class="notice"><strong>Important</strong>: Events older than 18 months will be archived and no longer accessible via the API or exports. Archival will begin no sooner than 1 August 2026 in sandbox environments, and no sooner than 1 October 2026 in live environments. Events within the 18-month window are unaffected. If you need archived data, contact GoCardless support.</p>
 */
final class Event extends \Dmorenof\SdkRuntime\DTO
{
    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * What has happened to the resource. See [Event Types](https://docs.gocardless.com/docs/api-reference/events) for the possible actions.
     */
    public string $action;
    /**
     * Fixed [timestamp](https://docs.gocardless.com/docs/api-reference/data-conventions#dates-and-times), recording when this resource was created.
     * Format: date-time
     */
    public string $created_at;
    /**
     * Present only in webhooks when an integrator is authorised to send their own
     * notifications. See [here](https://docs.gocardless.com/docs/tutorials/handling-customer-notifications)
     * for further information.
     *
     */
    public ?\GoCardlessSDK\Collections\Event\CustomerNotificationsCollection $customer_notifications;
    public \GoCardlessSDK\DTOs\Event\Details $details;
    /**
     * Unique identifier, beginning with "EV".
     */
    public string $id;
    public \GoCardlessSDK\DTOs\Event\Links $links;
    public \GoCardlessSDK\DTOs\Event\Metadata $metadata;
    public \GoCardlessSDK\DTOs\Event\ResourceMetadata $resource_metadata;
    public \GoCardlessSDK\Enums\Event\ResourceType $resource_type;
    public \GoCardlessSDK\DTOs\Event\Source $source;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'action' => is_string($value) ? $this->action = $value : parent::assignMember($name, $value),
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'details' => $value instanceof \stdClass ? $this->details = new \GoCardlessSDK\DTOs\Event\Details($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'links' => $value instanceof \stdClass ? $this->links = new \GoCardlessSDK\DTOs\Event\Links($value) : parent::assignMember($name, $value),
            'resource_type' => is_string($value) ? $this->resource_type = \GoCardlessSDK\Enums\Event\ResourceType::from($value) : parent::assignMember($name, $value),
            'source' => $value instanceof \stdClass ? $this->source = new \GoCardlessSDK\DTOs\Event\Source($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
