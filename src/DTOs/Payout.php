<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs;

/**
 * Payouts
 *
 * Payouts represent transfers from GoCardless to a [creditor](https://docs.gocardless.com/docs/api-reference/creditor). Each payout contains the funds collected from one or many [payments](https://docs.gocardless.com/docs/api-reference/payment). All the payments in a payout will have been collected in the same currency. Payouts are created automatically after a payment has been successfully collected.
 */
final class Payout extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'amount',
    'arrival_date',
    'created_at',
    'currency',
    'deducted_fees',
    'fx',
    'id',
    'links',
    'metadata',
    'payout_type',
    'reference',
    'status',
    'tax_currency',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Amount in minor unit (e.g. pence in GBP, cents in EUR).
     */
    public int $amount;
    /**
     * Date the payout is due to arrive in the creditor's bank account.
     * One of:
     *
     * - `yyyy-mm-dd`: the payout has been paid and is due to arrive in the creditor's bank account on this day
     * - `null`: the payout hasn't been paid yet
     *
     */
    public ?string $arrival_date;
    /**
     * Fixed [timestamp](https://docs.gocardless.com/docs/api-reference/data-conventions#dates-and-times), recording when this resource was created.
     * Format: date-time
     */
    public string $created_at;
    public \GoCardlessSDK\Enums\Payout\Currency $currency;
    /**
     * Fees that have already been deducted from the payout amount in minor unit (e.g. pence in GBP, cents in EUR), inclusive of tax if applicable.
     * <br />
     * For each `late_failure_settled` or `chargeback_settled` action, we refund the transaction fees in a payout. This means that a payout can have a negative `deducted_fees` value.
     * <br />
     * This field is calculated as `(GoCardless fees + app fees + surcharge fees) - (refunded fees)`
     * <br />
     * If the merchant is invoiced for fees separately from the payout, then `deducted_fees` will be 0.
     */
    public int $deducted_fees;
    public \GoCardlessSDK\DTOs\Payout\Fx $fx;
    /**
     * Unique identifier, beginning with "PO".
     */
    public string $id;
    public \GoCardlessSDK\DTOs\Payout\Links $links;
    public \GoCardlessSDK\DTOs\Payout\Metadata $metadata;
    public \GoCardlessSDK\Enums\Payout\PayoutType $payout_type;
    /**
     * Reference which appears on the creditor's bank statement.
     */
    public string $reference;
    public \GoCardlessSDK\Enums\Payout\Status $status;
    /**
     * [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217#Active_codes) code for the currency in which tax is paid out to the tax authorities of your tax jurisdiction. Currently “EUR”, “GBP”, for French or British merchants, this will be `null` if tax is not applicable <em>beta</em>
     */
    public ?string $tax_currency;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'arrival_date' => $value === null || is_string($value) ? $this->arrival_date = $value : parent::assignMember($name, $value),
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = \GoCardlessSDK\Enums\Payout\Currency::from($value) : parent::assignMember($name, $value),
            'deducted_fees' => is_int($value) ? $this->deducted_fees = $value : parent::assignMember($name, $value),
            'fx' => $value instanceof \stdClass ? $this->fx = new \GoCardlessSDK\DTOs\Payout\Fx($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'links' => $value instanceof \stdClass ? $this->links = new \GoCardlessSDK\DTOs\Payout\Links($value) : parent::assignMember($name, $value),
            'payout_type' => is_string($value) ? $this->payout_type = \GoCardlessSDK\Enums\Payout\PayoutType::from($value) : parent::assignMember($name, $value),
            'reference' => is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \GoCardlessSDK\Enums\Payout\Status::from($value) : parent::assignMember($name, $value),
            'tax_currency' => $value === null || is_string($value) ? $this->tax_currency = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
