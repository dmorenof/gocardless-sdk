<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Customer;

/**
 * CustomerNotificationLinks
 */
final class NotificationLinks extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'customer',
        'event',
    ];

    /**
     * The customer who should be contacted with this notification.
     * Example: "CU123"
     */
    public string $customer;
    /**
     * The event that triggered the notification to be scheduled.
     * Example: "EV123"
     */
    public string $event;
    /**
     * The identifier of the related mandate.
     * Example: "MD123"
     */
    public string $mandate;
    /**
     * The identifier of the related payment.
     * Example: "PM123"
     */
    public string $payment;
    /**
     * The identifier of the related refund.
     * Example: "RF123"
     */
    public string $refund;
    /**
     * The identifier of the related subscription.
     * Example: "SB123"
     */
    public string $subscription;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'event' => is_string($value) ? $this->event = $value : parent::assignMember($name, $value),
            'mandate' => is_string($value) ? $this->mandate = $value : parent::assignMember($name, $value),
            'payment' => is_string($value) ? $this->payment = $value : parent::assignMember($name, $value),
            'refund' => is_string($value) ? $this->refund = $value : parent::assignMember($name, $value),
            'subscription' => is_string($value) ? $this->subscription = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
