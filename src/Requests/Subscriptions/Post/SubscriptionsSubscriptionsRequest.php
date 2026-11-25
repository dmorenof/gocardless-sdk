<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\Subscriptions\Post;

final class SubscriptionsSubscriptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'currency',
        'interval_unit',
        'links',
    ];

    public \GoCardlessSDK\DTOs\Subscription\AnyOfAmountStringable $amount;
    public \GoCardlessSDK\DTOs\Subscription\OneOfAppFeeStringable $app_fee;
    public \GoCardlessSDK\DTOs\Subscription\OneOfCountStringable $count;
    /**
     * [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217#Active_codes) currency code. Currently "AUD", "CAD", "DKK", "EUR", "GBP", "NZD", "SEK" and "USD" are supported.
     */
    public string $currency;
    public \GoCardlessSDK\DTOs\Subscription\OneOfDayOfMonthStringable $day_of_month;
    /**
     * Date on or after which no further payments should be created.
     * <br />
     * If this field is blank and `count` is not specified, the subscription will continue forever.
     * <br />
     * <p class="deprecated-notice"><strong>Deprecated</strong>: This field will be removed in a future API version. Use <code>count</code> to specify a number of payments instead.</p>
     * Format: date
     */
    public ?string $end_date;
    public \GoCardlessSDK\DTOs\Subscription\AnyOfIntervalStringable $interval;
    public \GoCardlessSDK\Enums\Subscription\IntervalUnit $interval_unit;
    public \GoCardlessSDK\Requests\Subscriptions\Post\Subscriptions\SubscriptionsLinksRequest $links;
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

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'end_date' => $value === null || is_string($value) ? $this->end_date = $value : parent::assignMember($name, $value),
            'interval_unit' => is_string($value) ? $this->interval_unit = \GoCardlessSDK\Enums\Subscription\IntervalUnit::from($value) : parent::assignMember($name, $value),
            'month' => is_string($value) ? $this->month = \GoCardlessSDK\Enums\Subscription\Month::from($value) : parent::assignMember($name, $value),
            'name' => $value === null || is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'payment_reference' => $value === null || is_string($value) ? $this->payment_reference = $value : parent::assignMember($name, $value),
            'retry_if_possible' => is_bool($value) ? $this->retry_if_possible = $value : parent::assignMember($name, $value),
            'start_date' => $value === null || is_string($value) ? $this->start_date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
