<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\InstalmentSchedules\CreateWithDates\Post;

final class InstalmentSchedulesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'currency',
        'instalments',
        'links',
        'name',
        'total_amount',
    ];

    protected const array VALIDATION = [
        'name' => [
            'minLength' => 1,
            'maxLength' => 100,
        ],
    ];

    public \GoCardlessSDK\DTOs\Subscription\OneOfAppFeeStringable $app_fee;
    public \GoCardlessSDK\Enums\InstalmentSchedule\Currency $currency;
    /**
     * An explicit array of instalment payments, each specifying at least an `amount` and `charge_date`. See [create (with dates)](https://docs.gocardless.com/docs/api-reference/instalment-schedule#create-with-schedule)
     * Example: [{"amount":250,"charge_date":"2020-11-03"}]
     */
    public \GoCardlessSDK\Collections\InstalmentSchedules\CreateWithDates\Post\InstalmentSchedules\SchedulesInstalmentsCollection $instalments;
    public \GoCardlessSDK\Requests\InstalmentSchedules\CreateWithDates\Post\InstalmentSchedules\SchedulesLinksRequest $links;
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
     * An optional reference that will appear on your customer's bank statement. The character limit for this reference is dependent on the scheme.<br /> <strong>ACH</strong> - 10 characters<br /> <strong>Autogiro</strong> - 11 characters<br /> <strong>Bacs</strong> - 10 characters<br /> <strong>BECS</strong> - 30 characters<br /> <strong>BECS NZ</strong> - 12 characters<br /> <strong>Betalingsservice</strong> - 30 characters<br /> <strong>Faster Payments</strong> - 18 characters<br /> <strong>PAD</strong> - scheme doesn't offer references<br /> <strong>PayTo</strong> - 18 characters<br /> <strong>SEPA</strong> - 140 characters<br /> Note that this reference must be unique (for each merchant) for the BECS scheme as it is a scheme requirement. <p class='restricted-notice'><strong>Restricted</strong>: You can only specify a payment reference for Bacs payments (that is, when collecting from the UK) if you're on the <a href='https://gocardless.com/pricing'>GoCardless Plus, Pro or Enterprise packages</a>.</p> <p class='restricted-notice'><strong>Restricted</strong>: You can not specify a payment reference for Faster Payments.</p>
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
            'currency' => is_string($value) ? $this->currency = \GoCardlessSDK\Enums\InstalmentSchedule\Currency::from($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'payment_reference' => $value === null || is_string($value) ? $this->payment_reference = $value : parent::assignMember($name, $value),
            'retry_if_possible' => is_bool($value) ? $this->retry_if_possible = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
