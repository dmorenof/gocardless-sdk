<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs;

/**
 * Instalment Schedule
 *
 * Instalment schedules are objects which represent a collection of related payments, with the
 * intention to collect the `total_amount` specified. The API supports both schedule-based
 * creation (similar to subscriptions) as well as explicit selection of differing payment
 * amounts and charge dates.
 *
 * Unlike subscriptions, the payments are created immediately, so the instalment schedule
 * cannot be modified once submitted and instead can only be cancelled (which will cancel
 * any of the payments which have not yet been submitted).
 *
 * Customers will receive a single notification about the complete schedule of collection.
 *
 */
final class InstalmentSchedule extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'name' => [
            'minLength' => 1,
            'maxLength' => 100,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Fixed [timestamp](https://docs.gocardless.com/docs/api-reference/data-conventions#dates-and-times), recording when this resource was created.
     * Format: date-time
     */
    public string $created_at;
    public \GoCardlessSDK\Enums\InstalmentSchedule\Currency $currency;
    /**
     * Unique identifier, beginning with "IS".
     */
    public string $id;
    public \GoCardlessSDK\DTOs\InstalmentSchedule\Links $links;
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
    public \GoCardlessSDK\DTOs\InstalmentSchedule\PaymentErrors $payment_errors;
    public \GoCardlessSDK\Enums\InstalmentSchedule\Status $status;
    /**
     * The total amount of the instalment schedule, defined as the sum of all individual
     * payments, in the lowest denomination for the currency (e.g. pence in GBP, cents in
     * EUR). If the requested payment amounts do not sum up correctly, a validation error
     * will be returned.
     */
    public int $total_amount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = \GoCardlessSDK\Enums\InstalmentSchedule\Currency::from($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'links' => $value instanceof \stdClass ? $this->links = new \GoCardlessSDK\DTOs\InstalmentSchedule\Links($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \GoCardlessSDK\Enums\InstalmentSchedule\Status::from($value) : parent::assignMember($name, $value),
            'total_amount' => is_int($value) ? $this->total_amount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
