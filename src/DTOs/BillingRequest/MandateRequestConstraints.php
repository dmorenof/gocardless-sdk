<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest;

/**
 * BillingRequestMandateRequestConstraints
 *
 * Constraints that will apply to the mandate_request. (Optional) Specifically required for PayTo and VRP.
 */
final class MandateRequestConstraints extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The latest date at which payments can be taken, must occur after start_date if present
     *
     * This is an optional field and if it is not supplied the agreement will be considered open and
     * will not have an end date. Keep in mind the end date must take into account how long it will
     * take the user to set up this agreement via the Billing Request.
     *
     */
    public ?string $end_date;
    /**
     * The maximum amount that can be charged for a single payment in the lowest denomination for the currency (e.g. pence in GBP, cents in EUR). _Note:_ Required for PayTo and VRP.
     */
    public int $max_amount_per_payment;
    /**
     * A constraint where you can specify info (free text string) about how payments are calculated. For use when payments vary and cannot be expressed as a fixed amount and frequency. _Note:_ This is only supported for ACH and PAD schemes.
     *
     */
    public string $payment_method;
    /**
     * Caps on the total amount and/or number of payments that can be collected within a
     * repeating period (e.g. no more than a set amount per month), as opposed to
     * `max_amount_per_payment` which caps a single payment.
     *
     * _Note:_ Required for VRP, where exactly one periodic limit must be provided. Optional for
     * PayTo.
     *
     */
    public \GoCardlessSDK\Collections\BillingRequest\MandateRequestConstraints\PeriodicLimitsCollection $periodic_limits;
    /**
     * The date from which payments can be taken.
     *
     * This is an optional field and if it is not supplied the start date will be set to the day
     * authorisation happens.
     *
     */
    public ?string $start_date;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'end_date' => $value === null || is_string($value) ? $this->end_date = $value : parent::assignMember($name, $value),
            'max_amount_per_payment' => is_int($value) ? $this->max_amount_per_payment = $value : parent::assignMember($name, $value),
            'payment_method' => is_string($value) ? $this->payment_method = $value : parent::assignMember($name, $value),
            'start_date' => $value === null || is_string($value) ? $this->start_date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
