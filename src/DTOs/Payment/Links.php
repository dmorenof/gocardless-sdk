<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Payment;

/**
 * PaymentLinks
 */
final class Links extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * ID of [creditor](https://docs.gocardless.com/docs/api-reference/creditor) to which the collected payment will be sent.
     * Example: "CR123"
     */
    public string $creditor;
    /**
     * ID of [instalment_schedule](https://docs.gocardless.com/docs/api-reference/instalment-schedule) from which this payment was created.<br/>**Note**: this property will only be present if this payment is part of an instalment schedule.
     * Example: "IS123"
     */
    public string $instalment_schedule;
    /**
     * ID of the [mandate](https://docs.gocardless.com/docs/api-reference/mandate) against which this payment should be collected.
     * Example: "MD123"
     */
    public string $mandate;
    /**
     * ID of [payout](https://docs.gocardless.com/docs/api-reference/payout) which contains the funds from this payment.<br/>_Note_: this property will not be present until the payment has been successfully collected.
     * Example: "PO123"
     */
    public string $payout;
    /**
     * ID of [subscription](https://docs.gocardless.com/docs/api-reference/subscription) from which this payment was created.<br/>_Note_: this property will only be present if this payment is part of a subscription.
     * Example: "SU123"
     */
    public string $subscription;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creditor' => is_string($value) ? $this->creditor = $value : parent::assignMember($name, $value),
            'instalment_schedule' => is_string($value) ? $this->instalment_schedule = $value : parent::assignMember($name, $value),
            'mandate' => is_string($value) ? $this->mandate = $value : parent::assignMember($name, $value),
            'payout' => is_string($value) ? $this->payout = $value : parent::assignMember($name, $value),
            'subscription' => is_string($value) ? $this->subscription = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
