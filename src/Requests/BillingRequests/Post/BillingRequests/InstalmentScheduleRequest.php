<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\BillingRequests\Post\BillingRequests;

final class InstalmentScheduleRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'name' => [
            'minLength' => 1,
            'maxLength' => 100,
        ],
    ];

    public \GoCardlessSDK\DTOs\Subscription\OneOfAppFeeStringable $app_fee;
    /**
     * [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217#Active_codes) currency code. Currently "USD" and "CAD" are supported.
     */
    public string $currency;
    /**
     * An explicit array of instalment payments, each specifying at least an `amount` and `charge_date`. See [create (with dates)](https://docs.gocardless.com/docs/api-reference/instalment-schedule#create-with-schedule)
     */
    public ?\GoCardlessSDK\Collections\BillingRequests\Post\BillingRequests\InstalmentScheduleRequest\WithDatesCollection $instalments_with_dates;
    public \GoCardlessSDK\DTOs\BillingRequest\InstalmentsWithScheduleStringable $instalments_with_schedule;
    public \GoCardlessSDK\DTOs\Customer\Metadata $metadata;
    /**
     * Name of the instalment schedule, up to 100 chars. This name will also be
     * copied to the payments of the instalment schedule if you use schedule-based creation.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
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
    public \GoCardlessSDK\DTOs\InstalmentSchedule\AnyOfTotalAmountStringable $total_amount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'instalments_with_schedule' => $value instanceof \stdClass ? $this->instalments_with_schedule = new \GoCardlessSDK\DTOs\BillingRequest\InstalmentsWithScheduleStringable($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'payment_reference' => $value === null || is_string($value) ? $this->payment_reference = $value : parent::assignMember($name, $value),
            'retry_if_possible' => is_bool($value) ? $this->retry_if_possible = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
