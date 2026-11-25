<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest\MandateRequestConstraints;

final class PeriodicLimitsDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The alignment of the period. Defaults to `creation_date` if not specified.
     *
     * `calendar` - the period follows fixed calendar boundaries, the same for every mandate:
     * `week` runs Monday to Sunday, `month` runs from the 1st to the last day of the calendar
     * month, and `year` runs from 1 January to 31 December. If the mandate starts partway
     * through a period, the limit for that first period is reduced proportionally to the days
     * remaining (e.g. a monthly limit starting on the 15th gives roughly half the limit for
     * that first month).
     *
     * `creation_date` - the period follows the mandate's own start date rather than the
     * calendar. For example, if the mandate starts on the 15th, each monthly period runs from
     * the 15th to the 14th of the following month. The first period is a full period, not
     * reduced proportionally.
     *
     * _Note:_ Has no effect when period is `flexible`.
     *
     */
    public \GoCardlessSDK\Enums\BillingRequest\MandateRequestConstraints\PeriodicLimitsItem\AlignmentEnum $alignment;
    /**
     * The maximum number of payments that can be collected in this periodic limit.
     *
     * _Note:_ Only supported for the PayTo scheme, where it is optional.
     *
     */
    public ?int $max_payments;
    /**
     * The maximum total amount that can be charged for all payments in this periodic limit,
     * in the lowest denomination for the currency (e.g. pence in GBP, cents in EUR).
     *
     * _Note:_ Required for VRP. This is not permitted for the PayTo scheme.
     *
     */
    public ?int $max_total_amount;
    /**
     * The repeating period for this mandate. Required whenever a periodic limit is provided
     * (for both VRP and PayTo). If periodic_limits is omitted entirely for PayTo, this
     * defaults to flexible.
     *
     */
    public \GoCardlessSDK\Enums\BillingRequest\MandateRequestConstraints\PeriodicLimitsItem\PeriodEnum $period;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'alignment' => is_string($value) ? $this->alignment = \GoCardlessSDK\Enums\BillingRequest\MandateRequestConstraints\PeriodicLimitsItem\AlignmentEnum::from($value) : parent::assignMember($name, $value),
            'max_payments' => $value === null || is_int($value) ? $this->max_payments = $value : parent::assignMember($name, $value),
            'max_total_amount' => $value === null || is_int($value) ? $this->max_total_amount = $value : parent::assignMember($name, $value),
            'period' => is_string($value) ? $this->period = \GoCardlessSDK\Enums\BillingRequest\MandateRequestConstraints\PeriodicLimitsItem\PeriodEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
