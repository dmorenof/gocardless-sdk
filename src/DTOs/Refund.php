<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs;

/**
 * Refunds
 *
 * Refund objects represent (partial) refunds of a [payment](https://docs.gocardless.com/docs/api-reference/payment) back to the [customer](https://docs.gocardless.com/docs/api-reference/customer).
 *
 * GoCardless will notify you via a [webhook](https://docs.gocardless.com/docs/api-reference/webhooks) whenever a refund is created, and will update the `amount_refunded` property of the payment.
 */
final class Refund extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'created_at',
        'currency',
        'fx',
        'id',
        'links',
        'metadata',
        'reference',
        'status',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Amount in minor unit (e.g. pence in GBP, cents in EUR).
     */
    public int $amount;
    /**
     * Fixed [timestamp](https://docs.gocardless.com/docs/api-reference/data-conventions#dates-and-times), recording when this resource was created.
     * Format: date-time
     */
    public string $created_at;
    /**
     * [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217#Active_codes) currency code. This is set to the currency of the refund's [payment](https://docs.gocardless.com/docs/api-reference/payment).
     */
    public string $currency;
    public \GoCardlessSDK\DTOs\Refund\Fx $fx;
    /**
     * Unique identifier, beginning with "RF".
     */
    public string $id;
    public \GoCardlessSDK\DTOs\Refund\Links $links;
    public \GoCardlessSDK\DTOs\Customer\Metadata $metadata;
    /**
     * An optional reference that will appear on your customer's bank statement. The character limit for this reference is dependent on the scheme.<br /> <strong>ACH</strong> - 10 characters<br /> <strong>Autogiro</strong> - 11 characters<br /> <strong>Bacs</strong> - 10 characters<br /> <strong>BECS</strong> - 30 characters<br /> <strong>BECS NZ</strong> - 12 characters<br /> <strong>Betalingsservice</strong> - 30 characters<br /> <strong>Faster Payments</strong> - 18 characters<br /> <strong>PAD</strong> - scheme doesn't offer references<br /> <strong>PayTo</strong> - 18 characters<br /> <strong>SEPA</strong> - 140 characters<br /> Note that this reference must be unique (for each merchant) for the BECS scheme as it is a scheme requirement. <p class='restricted-notice'><strong>Restricted</strong>: You can only specify a payment reference for Bacs payments (that is, when collecting from the UK) if you're on the <a href='https://gocardless.com/pricing'>GoCardless Plus, Pro or Enterprise packages</a>.</p> <p class='restricted-notice'><strong>Restricted</strong>: You can not specify a payment reference for Faster Payments.</p>
     */
    public ?string $reference;
    public \GoCardlessSDK\Enums\Refund\Status $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'fx' => $value instanceof \stdClass ? $this->fx = new \GoCardlessSDK\DTOs\Refund\Fx($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'links' => $value instanceof \stdClass ? $this->links = new \GoCardlessSDK\DTOs\Refund\Links($value) : parent::assignMember($name, $value),
            'reference' => $value === null || is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \GoCardlessSDK\Enums\Refund\Status::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
