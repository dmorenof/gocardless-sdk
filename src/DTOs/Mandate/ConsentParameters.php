<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Mandate;

/**
 * MandateConsentParameters
 *
 * (Optional) Payto and VRP Scheme specific information
 */
final class ConsentParameters extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The currency for the consent parameters
     */
    public string $currency;
    /**
     * The latest date at which payments can be taken, must occur after start_date if present
     */
    public ?string $end_date;
    /**
     * The fixed amount for each payment, in the lowest denomination for the currency
     */
    public ?int $fixed_amount_per_payment;
    /**
     * Unique identifier for the consent parameters
     */
    public string $id;
    /**
     * The maximum amount that can be charged for a single payment
     */
    public ?int $max_amount_per_payment;
    /**
     * The maximum total amount that can be charged for all payments in this period
     */
    public ?int $max_amount_per_period;
    /**
     * The maximum number of payments that can be collected in this period
     */
    public ?int $max_payments_per_period;
    public \GoCardlessSDK\Enums\Mandate\Period $period;
    /**
     * The alignment of the payment period.
     */
    public \GoCardlessSDK\Enums\Mandate\ConsentParameters\PeriodAlignmentEnum $period_alignment;
    /**
     * The scheme associated with the consent parameters
     */
    public string $scheme;
    /**
     * The date from which payments can be taken
     */
    public string $start_date;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'end_date' => $value === null || is_string($value) ? $this->end_date = $value : parent::assignMember($name, $value),
            'fixed_amount_per_payment' => $value === null || is_int($value) ? $this->fixed_amount_per_payment = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'max_amount_per_payment' => $value === null || is_int($value) ? $this->max_amount_per_payment = $value : parent::assignMember($name, $value),
            'max_amount_per_period' => $value === null || is_int($value) ? $this->max_amount_per_period = $value : parent::assignMember($name, $value),
            'max_payments_per_period' => $value === null || is_int($value) ? $this->max_payments_per_period = $value : parent::assignMember($name, $value),
            'period' => is_string($value) ? $this->period = \GoCardlessSDK\Enums\Mandate\Period::from($value) : parent::assignMember($name, $value),
            'period_alignment' => is_string($value) ? $this->period_alignment = \GoCardlessSDK\Enums\Mandate\ConsentParameters\PeriodAlignmentEnum::from($value) : parent::assignMember($name, $value),
            'scheme' => is_string($value) ? $this->scheme = $value : parent::assignMember($name, $value),
            'start_date' => is_string($value) ? $this->start_date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
