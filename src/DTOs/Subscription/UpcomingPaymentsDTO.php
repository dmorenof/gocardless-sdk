<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Subscription;

final class UpcomingPaymentsDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The amount of this payment, in minor unit (e.g. pence in GBP, cents in EUR).
     * Example: 2500
     */
    public int $amount;
    /**
     * The date on which this payment will be charged.
     * Example: "2014-11-03"
     * Format: date
     */
    public string $charge_date;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'charge_date' => is_string($value) ? $this->charge_date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
