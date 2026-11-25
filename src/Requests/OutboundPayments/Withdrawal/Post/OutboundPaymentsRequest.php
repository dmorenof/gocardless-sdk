<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\OutboundPayments\Withdrawal\Post;

final class OutboundPaymentsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'amount',
    'scheme',
];

    /**
     * Amount, in the lowest denomination for the currency (e.g. pence in GBP, cents in EUR).
     */
    public int $amount;
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
    public \GoCardlessSDK\Requests\OutboundPayments\Withdrawal\Post\OutboundPayments\PaymentsLinksRequest $links;
    public \GoCardlessSDK\DTOs\OutboundPayment\Metadata $metadata;
    /**
     * An optional reference that will appear on your customer's bank statement.
     * The character limit for this reference is dependent on the scheme.<br />
     * <strong>Faster Payments</strong> - 18 characters, including: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789 &-./"<br />
     */
    public string $reference;
    public \GoCardlessSDK\Enums\OutboundPayment\Scheme $scheme;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'execution_date' => is_string($value) ? $this->execution_date = $value : parent::assignMember($name, $value),
            'reference' => is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'scheme' => is_string($value) ? $this->scheme = \GoCardlessSDK\Enums\OutboundPayment\Scheme::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
