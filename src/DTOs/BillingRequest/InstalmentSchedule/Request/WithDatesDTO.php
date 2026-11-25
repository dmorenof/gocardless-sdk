<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest\InstalmentSchedule\Request;

final class WithDatesDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'amount',
    'charge_date',
];

    /**
     * Amount, in the lowest denomination for the currency (e.g. pence in GBP, cents in EUR).
     *
     * Minimum and maximum amounts vary by payment scheme. For more information, see [Transaction limits](https://support.gocardless.com/hc/en-gb/articles/115000309245-Transaction-limits)
     *
     * For Variable Recurring Payments (VRP), this must not exceed the mandate's `max_amount_per_payment`
     * constraint.
     */
    public int $amount;
    /**
     * A future date on which the payment should be collected. If the date
     * is before the next_possible_charge_date on the
     * [mandate](https://docs.gocardless.com/docs/api-reference/mandate), it will be automatically rolled
     * forwards to that date.
     * Format: date
     */
    public ?string $charge_date;
    /**
     * A human-readable description of the payment. This will be included in the notification email GoCardless sends to your customer if your organisation does not send its own notifications (see [compliance requirements](https://docs.gocardless.com/docs/api-reference/compliance-requirements)).
     */
    public ?string $description;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'charge_date' => $value === null || is_string($value) ? $this->charge_date = $value : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
