<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Event;

/**
 * EventDetails
 */
final class Details extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * When we send a creditor `new_payout_currency_added` webhook, we also send the bank account id of the new account
     * Example: "BA123"
     */
    public string $bank_account_id;
    /**
     * What triggered the event. _Note:_ `cause` is our simplified and predictable key indicating what triggered the event.
     * Example: "bank_account_disabled"
     */
    public string $cause;
    /**
     * When we send a creditor `new_payout_currency_added` webhook, we also send the currency of the new account
     * Example: "GBP"
     */
    public string $currency;
    /**
     * Human readable description of the cause. _Note:_ Changes to event descriptions are not considered breaking.
     * Example: "Customer's bank account closed"
     */
    public string $description;
    /**
     * Count of rows in the csv. This is sent for export events
     * Example: 10
     */
    public int $item_count;
    /**
     * When will_attempt_retry is set to false, this field will contain
     * the reason the payment was not retried. This can be one of:
     *
     * - `failure_filter_applied`: The payment won't be intelligently retried as there is a high likelihood of failure on retry.
     * - `other`: The payment won't be intelligently retried due to any other reason.
     * Example: "failure_filter_applied"
     */
    public string $not_retried_reason;
    /**
     * Who initiated the event. One of:
     *
     * - `bank`: this event was triggered by a report from the banks
     * - `gocardless`: this event was performed by GoCardless automatically
     * - `api`: this event was triggered by an API endpoint
     * - `customer`: this event was triggered by a Customer
     * - `payer`: this event was triggered by a Payer
     * Example: "bank"
     */
    public \GoCardlessSDK\Enums\Event\Details\OriginEnum $origin;
    /**
     * When we send a creditor `creditor_updated` webhook, this tells you which property on the creditor has been updated
     * Example: "fx_payout_currency"
     */
    public string $property;
    /**
     * Set when a `bank` is the origin of the event. This is the reason code received in the report from the customer's bank. See the [GoCardless Direct Debit guide](https://gocardless.com/direct-debit/receiving-messages) for information on the meanings of different reason codes. _Note:_ `reason_code` is payment scheme-specific and can be inconsistent between banks.
     * Example: "ADDACS-B"
     */
    public string $reason_code;
    /**
     * A bank payment scheme. Set when a bank is the origin of the event.
     * Example: "bacs"
     */
    public ?\GoCardlessSDK\Enums\Event\Details\SchemeEnum $scheme;
    /**
     * Whether the payment will be retried automatically. Set on a payment failed event.
     * Example: true
     */
    public bool $will_attempt_retry;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank_account_id' => is_string($value) ? $this->bank_account_id = $value : parent::assignMember($name, $value),
            'cause' => is_string($value) ? $this->cause = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'item_count' => is_int($value) ? $this->item_count = $value : parent::assignMember($name, $value),
            'not_retried_reason' => is_string($value) ? $this->not_retried_reason = $value : parent::assignMember($name, $value),
            'origin' => is_string($value) ? $this->origin = \GoCardlessSDK\Enums\Event\Details\OriginEnum::from($value) : parent::assignMember($name, $value),
            'property' => is_string($value) ? $this->property = $value : parent::assignMember($name, $value),
            'reason_code' => is_string($value) ? $this->reason_code = $value : parent::assignMember($name, $value),
            'scheme' => $value === null || is_string($value) ? $this->scheme = $value === null ? null : \GoCardlessSDK\Enums\Event\Details\SchemeEnum::from($value) : parent::assignMember($name, $value),
            'will_attempt_retry' => is_bool($value) ? $this->will_attempt_retry = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
