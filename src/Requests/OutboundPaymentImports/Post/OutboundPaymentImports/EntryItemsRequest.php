<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\OutboundPaymentImports\Post\OutboundPaymentImports;

/**
 * The entry items contain attributes required to [Create an outbound payment](https://docs.gocardless.com/docs/api-reference/outbound-payment#create-an-outbound-payment).
 * Please refer to that documentation for more information on the requirements for these fields.
 *
 * **Required**:
 *
 * - `amount`
 * - `scheme`
 * - `recipient_bank_account_id`
 *
 * Additional supported fields:
 *
 * - `reference`
 * - `metadata`
 *
 */
final class EntryItemsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'recipient_bank_account_id',
        'scheme',
    ];

    /**
     * Amount, in the lowest denomination for the currency (e.g. pence in GBP, cents in EUR).
     */
    public int $amount;
    public \GoCardlessSDK\DTOs\OutboundPayment\Metadata $metadata;
    /**
     * ID of the customer bank account which receives the outbound payment.
     */
    public string $recipient_bank_account_id;
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
            'recipient_bank_account_id' => is_string($value) ? $this->recipient_bank_account_id = $value : parent::assignMember($name, $value),
            'reference' => is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'scheme' => is_string($value) ? $this->scheme = \GoCardlessSDK\Enums\OutboundPayment\Scheme::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
