<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest\Subscription;

/**
 * BillingRequestSubscriptionRequest
 *
 * Request for a subscription
 */
final class Request extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Amount in the lowest denomination for the currency (e.g. pence in GBP, cents in EUR).
     */
    public int $amount;
    /**
     * The amount to be deducted from each payment as an app fee, to be paid to the partner integration which created the subscription, in the lowest denomination for the currency (e.g. pence in GBP, cents in EUR).
     */
    public ?int $app_fee;
    /**
     * The total number of payments that should be taken by this subscription.
     */
    public ?int $count;
    /**
     * [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217#Active_codes) currency code. Currently "USD" and "CAD" are supported.
     */
    public string $currency;
    /**
     * As per RFC 2445. The day of the month to charge customers on. `1`-`31` or `-1` to indicate the last day of the month. If the chosen day does not exist in a given month (e.g. `31` in April), the charge is made on the last day of that month.
     */
    public ?int $day_of_month;
    /**
     * Number of `interval_units` between customer charge dates. Must be greater than or equal to `1`. Must result in at least one charge date per year. Defaults to `1`.
     */
    public int $interval;
    public \GoCardlessSDK\Enums\Subscription\IntervalUnit $interval_unit;
    public \GoCardlessSDK\DTOs\BillingRequest\SubscriptionRequestLinks $links;
    public \GoCardlessSDK\DTOs\Customer\Metadata $metadata;
    public \GoCardlessSDK\Enums\Subscription\Month $month;
    /**
     * Optional name for the subscription. This will be set as the description on each payment created. Must not exceed 255 characters.
     */
    public ?string $name;
    /**
     * An optional payment reference. This will be set as the reference on each payment
     * created and will appear on your customer's bank statement. See the documentation for
     * the [create payment endpoint](https://docs.gocardless.com/docs/api-reference/payment#create-a-payment) for more details.
     * <br />
     */
    public ?string $payment_reference;
    /**
     * On failure, automatically retry payments using [intelligent retries](https://docs.gocardless.com/docs/optimise/reduced-failed-payments-with-success-plus). Default is `false`. <p class="notice"><strong>Important</strong>: To be able to use intelligent retries, Success+ needs to be enabled in [GoCardless dashboard](https://manage.gocardless.com/success-plus). </p>
     */
    public bool $retry_if_possible;
    /**
     * The date on which the first payment should be charged. If fulfilled after this date, this will be set as the mandate's `next_possible_charge_date`.
     * When left blank and `month` or `day_of_month` are provided, this will be set to the date of the first payment.
     * If created without `month` or `day_of_month` this will be set as the mandate's `next_possible_charge_date`.
     *
     * Format: date
     */
    public ?string $start_date;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'app_fee' => $value === null || is_int($value) ? $this->app_fee = $value : parent::assignMember($name, $value),
            'count' => $value === null || is_int($value) ? $this->count = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'day_of_month' => $value === null || is_int($value) ? $this->day_of_month = $value : parent::assignMember($name, $value),
            'interval' => is_int($value) ? $this->interval = $value : parent::assignMember($name, $value),
            'interval_unit' => is_string($value) ? $this->interval_unit = \GoCardlessSDK\Enums\Subscription\IntervalUnit::from($value) : parent::assignMember($name, $value),
            'links' => $value instanceof \stdClass ? $this->links = new \GoCardlessSDK\DTOs\BillingRequest\SubscriptionRequestLinks($value) : parent::assignMember($name, $value),
            'month' => is_string($value) ? $this->month = \GoCardlessSDK\Enums\Subscription\Month::from($value) : parent::assignMember($name, $value),
            'name' => $value === null || is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'payment_reference' => $value === null || is_string($value) ? $this->payment_reference = $value : parent::assignMember($name, $value),
            'retry_if_possible' => is_bool($value) ? $this->retry_if_possible = $value : parent::assignMember($name, $value),
            'start_date' => $value === null || is_string($value) ? $this->start_date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
