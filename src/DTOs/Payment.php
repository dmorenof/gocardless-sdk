<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs;

/**
 * Payments
 *
 * Payment objects represent payments from a [customer](https://docs.gocardless.com/docs/api-reference/customer) to a [creditor](https://docs.gocardless.com/docs/api-reference/creditor), taken against a Direct Debit [mandate](https://docs.gocardless.com/docs/api-reference/mandate).
 *
 * GoCardless will notify you via a [webhook](https://docs.gocardless.com/docs/api-reference/webhooks) whenever the state of a payment changes.
 */
final class Payment extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'amount_refunded',
        'charge_date',
        'created_at',
        'currency',
        'description',
        'fx',
        'id',
        'links',
        'metadata',
        'reference',
        'retry_if_possible',
        'scheme',
        'status',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Amount, in the lowest denomination for the currency (e.g. pence in GBP, cents in EUR).
     *
     * Minimum and maximum amounts vary by payment scheme. For more information, see [Transaction limits](https://support.gocardless.com/hc/en-gb/articles/115000309245-Transaction-limits)
     *
     * For Variable Recurring Payments (VRP), this must not exceed the mandate's `max_amount_per_payment`
     * constraint.
     */
    public int $amount;
    /**
     * Amount [refunded](https://docs.gocardless.com/docs/api-reference/refund), in the lowest denomination for the currency (e.g. pence in GBP, cents in EUR).
     */
    public int $amount_refunded;
    /**
     * The amount to be deducted from the payment as the OAuth app''s fee,
     * in the lowest denomination for the currency (e.g. pence in GBP, cents in EUR).
     *
     * Only present if the payment was created via an app.
     */
    public ?int $app_fee;
    /**
     * A future date on which the payment should be collected. If not specified, the payment will be collected as soon as possible. If the value is before the [mandate](https://docs.gocardless.com/docs/api-reference/mandate)'s `next_possible_charge_date` creation will fail. If the value is not a working day it will be rolled forwards to the next available one.
     * Format: date
     */
    public ?string $charge_date;
    /**
     * Fixed [timestamp](https://docs.gocardless.com/docs/api-reference/data-conventions#dates-and-times), recording when this resource was created.
     * Format: date-time
     */
    public string $created_at;
    public \GoCardlessSDK\Enums\Payment\Currency $currency;
    /**
     * A human-readable description of the payment. This will be included in the notification email GoCardless sends to your customer if your organisation does not send its own notifications (see [compliance requirements](https://docs.gocardless.com/docs/api-reference/compliance-requirements)).
     */
    public ?string $description;
    /**
     * This field indicates whether the ACH payment is processed through Faster
     * ACH or standard ACH.
     *
     * It is only present in the API response for ACH payments.
     */
    public ?bool $faster_ach;
    public \GoCardlessSDK\DTOs\Payment\Fx $fx;
    /**
     * Unique identifier, beginning with "PM".
     */
    public string $id;
    public \GoCardlessSDK\DTOs\Payment\Links $links;
    public \GoCardlessSDK\DTOs\Customer\Metadata $metadata;
    /**
     * An optional reference that will appear on your customer's bank statement. The character limit for this reference is dependent on the scheme.<br /> <strong>ACH</strong> - 10 characters<br /> <strong>Autogiro</strong> - 11 characters<br /> <strong>Bacs</strong> - 10 characters<br /> <strong>BECS</strong> - 30 characters<br /> <strong>BECS NZ</strong> - 12 characters<br /> <strong>Betalingsservice</strong> - 30 characters<br /> <strong>Faster Payments</strong> - 18 characters<br /> <strong>PAD</strong> - scheme doesn't offer references<br /> <strong>PayTo</strong> - 18 characters<br /> <strong>SEPA</strong> - 140 characters<br /> Note that this reference must be unique (for each merchant) for the BECS scheme as it is a scheme requirement. <p class='restricted-notice'><strong>Restricted</strong>: You can only specify a payment reference for Bacs payments (that is, when collecting from the UK) if you're on the <a href='https://gocardless.com/pricing'>GoCardless Plus, Pro or Enterprise packages</a>.</p> <p class='restricted-notice'><strong>Restricted</strong>: You can not specify a payment reference for Faster Payments.</p>
     */
    public ?string $reference;
    /**
     * On failure, automatically retry the payment using [intelligent retries](https://docs.gocardless.com/docs/optimise/reduced-failed-payments-with-success-plus). Default is `false`. <p class="notice"><strong>Important</strong>: To be able to use intelligent retries, Success+ needs to be enabled in [GoCardless dashboard](https://manage.gocardless.com/success-plus). </p>
     */
    public bool $retry_if_possible;
    /**
     * A bank payment scheme. Currently "ach", "autogiro", "bacs", "becs", "becs_nz", "betalingsservice", "faster_payments", "pad", "pay_to", "sepa_core", "sepa_credit_transfer" and "sepa_instant_credit_transfer" are supported.
     */
    public ?string $scheme;
    public \GoCardlessSDK\Enums\Payment\Status $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'amount_refunded' => is_int($value) ? $this->amount_refunded = $value : parent::assignMember($name, $value),
            'app_fee' => $value === null || is_int($value) ? $this->app_fee = $value : parent::assignMember($name, $value),
            'charge_date' => $value === null || is_string($value) ? $this->charge_date = $value : parent::assignMember($name, $value),
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = \GoCardlessSDK\Enums\Payment\Currency::from($value) : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'faster_ach' => $value === null || is_bool($value) ? $this->faster_ach = $value : parent::assignMember($name, $value),
            'fx' => $value instanceof \stdClass ? $this->fx = new \GoCardlessSDK\DTOs\Payment\Fx($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'links' => $value instanceof \stdClass ? $this->links = new \GoCardlessSDK\DTOs\Payment\Links($value) : parent::assignMember($name, $value),
            'reference' => $value === null || is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'retry_if_possible' => is_bool($value) ? $this->retry_if_possible = $value : parent::assignMember($name, $value),
            'scheme' => $value === null || is_string($value) ? $this->scheme = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \GoCardlessSDK\Enums\Payment\Status::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
