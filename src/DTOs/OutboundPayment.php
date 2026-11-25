<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs;

/**
 * Outbound Payments
 *
 * Outbound Payments represent payments sent from [creditors](https://docs.gocardless.com/docs/api-reference/creditor).
 *
 * GoCardless will notify you via a [webhook](https://docs.gocardless.com/docs/api-reference/webhooks) when the status of the outbound payment [changes](https://docs.gocardless.com/docs/api-reference/events/outbound-payment).
 *
 * #### Rate limiting
 *
 * Two rate limits apply to the Outbound Payments APIs:
 * - All POST Outbound Payment endpoints (create, withdraw, approve, cancel and etc.) share a single rate-limit group of 300 requests per minute. As initiating a payment typically requires two API calls (one to create the payment and one to approve it), this allows you to add approximately 150 outbound payments per minute.
 * - All remaining Outbound Payment endpoints are limited to 500 requests per minute.
 */
final class OutboundPayment extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'id',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Amount, in the lowest denomination for the currency (e.g. pence in GBP, cents in EUR).
     */
    public int $amount;
    /**
     * Fixed [timestamp](https://docs.gocardless.com/docs/api-reference/data-conventions#dates-and-times), recording when the outbound payment was created.
     * Format: date-time
     */
    public string $created_at;
    public \GoCardlessSDK\Enums\OutboundPayment\Currency $currency;
    /**
     * A human-readable description of the outbound payment
     */
    public string $description;
    /**
     * A future date on which the outbound payment should be sent.
     * If not specified, the payment will be sent as soon as possible.
     * Format: date
     */
    public string $execution_date;
    /**
     * Unique identifier of the outbound payment.
     */
    public string $id;
    /**
     * Indicates whether the outbound payment is a withdrawal to your verified business bank account.
     */
    public bool $is_withdrawal;
    public \GoCardlessSDK\DTOs\OutboundPayment\Links $links;
    public \GoCardlessSDK\DTOs\OutboundPayment\Metadata $metadata;
    /**
     * An optional reference that will appear on your customer's bank statement.
     * The character limit for this reference is dependent on the scheme.<br />
     * <strong>Faster Payments</strong> - 18 characters, including: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789 &-./"<br />
     */
    public string $reference;
    public \GoCardlessSDK\Enums\OutboundPayment\Scheme $scheme;
    public \GoCardlessSDK\Enums\OutboundPayment\Status $status;
    public \GoCardlessSDK\DTOs\OutboundPayment\Verifications $verifications;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = \GoCardlessSDK\Enums\OutboundPayment\Currency::from($value) : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'execution_date' => is_string($value) ? $this->execution_date = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'is_withdrawal' => is_bool($value) ? $this->is_withdrawal = $value : parent::assignMember($name, $value),
            'links' => $value instanceof \stdClass ? $this->links = new \GoCardlessSDK\DTOs\OutboundPayment\Links($value) : parent::assignMember($name, $value),
            'reference' => is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'scheme' => is_string($value) ? $this->scheme = \GoCardlessSDK\Enums\OutboundPayment\Scheme::from($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \GoCardlessSDK\Enums\OutboundPayment\Status::from($value) : parent::assignMember($name, $value),
            'verifications' => $value instanceof \stdClass ? $this->verifications = new \GoCardlessSDK\DTOs\OutboundPayment\Verifications($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
