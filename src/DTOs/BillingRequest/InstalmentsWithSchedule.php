<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest;

/**
 * BillingRequestInstalmentsWithSchedule
 *
 * Frequency of the payments you want to create, together with an array of payment
 * amounts to be collected, with a specified start date for the first payment.
 * See [create (with schedule)](https://docs.gocardless.com/docs/api-reference/instalment-schedule#create-with-schedule)
 *
 */
final class InstalmentsWithSchedule extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amounts',
        'interval',
        'interval_unit',
    ];

    /**
     * List of amounts of each instalment, in the lowest denomination for the
     * currency (e.g. cents in USD).
     *
     */
    public \GoCardlessSDK\Collections\IntegerCollection $amounts;
    /**
     * Number of `interval_units` between charge dates. Must be greater than or
     * equal to `1`.
     *
     * Example: 1
     */
    public int $interval;
    public \GoCardlessSDK\Enums\Subscription\IntervalUnit $interval_unit;
    /**
     * The date on which the first payment should be charged. Must be on or after the [mandate](https://docs.gocardless.com/docs/api-reference/mandate)'s `next_possible_charge_date`. When left blank and `month` or `day_of_month` are provided, this will be set to the date of the first payment. If created without `month` or `day_of_month` this will be set as the mandate's `next_possible_charge_date`
     * Format: date
     */
    public ?string $start_date;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amounts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->amounts = new \GoCardlessSDK\Collections\IntegerCollection($value) : parent::assignMember($name, $value),
            'interval' => is_int($value) ? $this->interval = $value : parent::assignMember($name, $value),
            'interval_unit' => is_string($value) ? $this->interval_unit = \GoCardlessSDK\Enums\Subscription\IntervalUnit::from($value) : parent::assignMember($name, $value),
            'start_date' => $value === null || is_string($value) ? $this->start_date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
