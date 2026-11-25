<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs;

/**
 * Subscriptions
 *
 * Subscriptions create [payments](https://docs.gocardless.com/docs/api-reference/payment) according to a schedule.
 *
 * ### Recurrence Rules
 *
 * The following rules apply when specifying recurrence:
 *
 * - If `day_of_month` and `start_date` are not provided `start_date` will be the [mandate](https://docs.gocardless.com/docs/api-reference/mandate)'s `next_possible_charge_date` and the subscription will then recur based on the `interval` & `interval_unit`
 * - If `month` or `day_of_month` are present the following validations apply:
 *
 * | __interval_unit__ | __month__                                      | __day_of_month__                           |
 * | :---------------- | :--------------------------------------------- | :----------------------------------------- |
 * | yearly            | optional (required if `day_of_month` provided) | optional (invalid if `month` not provided) |
 * | monthly           | invalid                                        | optional                                   |
 * | weekly            | invalid                                        | invalid                                    |
 *
 * Examples:
 *
 * | __interval_unit__ | __interval__ | __month__ | __day_of_month__ | valid?                                             |
 * | :---------------- | :----------- | :-------- | :--------------- | :------------------------------------------------- |
 * | yearly            | 1            | january   | -1               | valid                                              |
 * | monthly           | 6            |           |                  | valid                                              |
 * | monthly           | 6            |           | 12               | valid                                              |
 * | weekly            | 2            |           |                  | valid                                              |
 * | yearly            | 1            | march     |                  | invalid - missing `day_of_month`                   |
 * | yearly            | 1            |           | 2                | invalid - missing `month`                          |
 * | monthly           | 6            | august    | 12               | invalid - `month` must be blank                    |
 * | weekly            | 2            | october   | 10               | invalid - `month` and `day_of_month` must be blank |
 *
 * ### Rolling dates
 *
 * When a charge date falls on a non-business day, one of two things will happen:
 *
 * - if the recurrence rule specified `-1` as the `day_of_month`, the charge date will be rolled __backwards__ to the previous business day (i.e., the last working day of the month).
 * - otherwise the charge date will be rolled __forwards__ to the next business day.
 */
final class Subscription extends \Dmorenof\SdkRuntime\DTO
{
    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

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
     * Fixed [timestamp](https://docs.gocardless.com/docs/api-reference/data-conventions#dates-and-times), recording when this resource was created.
     * Format: date-time
     */
    public string $created_at;
    /**
     * [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217#Active_codes) currency code. Currently "AUD", "CAD", "DKK", "EUR", "GBP", "NZD", "SEK" and "USD" are supported.
     */
    public string $currency;
    /**
     * As per RFC 2445. The day of the month to charge customers on. `1`-`31` or `-1` to indicate the last day of the month. If the chosen day does not exist in a given month (e.g. `31` in April), the charge is made on the last day of that month.
     */
    public ?int $day_of_month;
    /**
     * The earliest date that will be used as a `charge_date` on payments
     * created for this subscription if it is resumed. Only present for `paused` subscriptions.
     * This value will change over time.
     * Format: date
     */
    public ?string $earliest_charge_date_after_resume;
    /**
     * Date on or after which no further payments should be created.
     * <br />
     * If this field is blank and `count` is not specified, the subscription will continue forever.
     * <br />
     * <p class="deprecated-notice"><strong>Deprecated</strong>: This field will be removed in a future API version. Use <code>count</code> to specify a number of payments instead.</p>
     * Format: date
     */
    public ?string $end_date;
    /**
     * Unique identifier, beginning with "SB".
     */
    public string $id;
    /**
     * Number of `interval_units` between customer charge dates. Must be greater than or equal to `1`. Must result in at least one charge date per year. Defaults to `1`.
     */
    public int $interval;
    public \GoCardlessSDK\Enums\Subscription\IntervalUnit $interval_unit;
    public \GoCardlessSDK\DTOs\Subscription\Links $links;
    public \GoCardlessSDK\DTOs\Customer\Metadata $metadata;
    public \GoCardlessSDK\Enums\Subscription\Month $month;
    /**
     * Optional name for the subscription. This will be set as the description on each payment created. Must not exceed 255 characters.
     */
    public ?string $name;
    /**
     * Whether the parent plan of this subscription is paused.
     */
    public bool $parent_plan_paused;
    /**
     * An optional payment reference. This will be set as the reference on each payment
     * created and will appear on your customer's bank statement. See the documentation for
     * the [create payment endpoint](https://docs.gocardless.com/docs/api-reference/payment#create-a-payment) for more details.
     * <br />
     * <p class="restricted-notice"><strong>Restricted</strong>: You need your own Service User Number to specify a payment reference for Bacs payments.</p>
     */
    public ?string $payment_reference;
    /**
     * On failure, automatically retry payments using [intelligent retries](https://docs.gocardless.com/docs/optimise/reduced-failed-payments-with-success-plus). Default is `false`. <p class="notice"><strong>Important</strong>: To be able to use intelligent retries, Success+ needs to be enabled in [GoCardless dashboard](https://manage.gocardless.com/success-plus). </p>
     */
    public bool $retry_if_possible;
    /**
     * The date on which the first payment should be charged. Must be on or after the [mandate](https://docs.gocardless.com/docs/api-reference/mandate)'s `next_possible_charge_date`. When left blank and `month` or `day_of_month` are provided, this will be set to the date of the first payment. If created without `month` or `day_of_month` this will be set as the mandate's `next_possible_charge_date`
     * Format: date
     */
    public ?string $start_date;
    public \GoCardlessSDK\Enums\Subscription\Status $status;
    /**
     * Up to 10 upcoming payments with their amounts and charge dates.
     */
    public \GoCardlessSDK\Collections\Subscription\UpcomingPaymentsCollection $upcoming_payments;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'app_fee' => $value === null || is_int($value) ? $this->app_fee = $value : parent::assignMember($name, $value),
            'count' => $value === null || is_int($value) ? $this->count = $value : parent::assignMember($name, $value),
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'day_of_month' => $value === null || is_int($value) ? $this->day_of_month = $value : parent::assignMember($name, $value),
            'earliest_charge_date_after_resume' => $value === null || is_string($value) ? $this->earliest_charge_date_after_resume = $value : parent::assignMember($name, $value),
            'end_date' => $value === null || is_string($value) ? $this->end_date = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'interval' => is_int($value) ? $this->interval = $value : parent::assignMember($name, $value),
            'interval_unit' => is_string($value) ? $this->interval_unit = \GoCardlessSDK\Enums\Subscription\IntervalUnit::from($value) : parent::assignMember($name, $value),
            'links' => $value instanceof \stdClass ? $this->links = new \GoCardlessSDK\DTOs\Subscription\Links($value) : parent::assignMember($name, $value),
            'month' => is_string($value) ? $this->month = \GoCardlessSDK\Enums\Subscription\Month::from($value) : parent::assignMember($name, $value),
            'name' => $value === null || is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'parent_plan_paused' => is_bool($value) ? $this->parent_plan_paused = $value : parent::assignMember($name, $value),
            'payment_reference' => $value === null || is_string($value) ? $this->payment_reference = $value : parent::assignMember($name, $value),
            'retry_if_possible' => is_bool($value) ? $this->retry_if_possible = $value : parent::assignMember($name, $value),
            'start_date' => $value === null || is_string($value) ? $this->start_date = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \GoCardlessSDK\Enums\Subscription\Status::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
