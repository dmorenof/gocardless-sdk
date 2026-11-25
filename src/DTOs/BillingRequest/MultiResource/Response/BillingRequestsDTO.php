<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest\MultiResource\Response;

final class BillingRequestsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\BillingRequest\AccountInformation\Request $account_information_request;
    /**
     * Fixed [timestamp](https://docs.gocardless.com/docs/api-reference/data-conventions#dates-and-times), recording when this resource was created.
     * Format: date-time
     */
    public string $created_at;
    /**
     * Unique identifier, beginning with "BRQ".
     */
    public string $id;
    public \GoCardlessSDK\DTOs\BillingRequest\InstalmentSchedule\Request $instalment_schedule_request;
    public \GoCardlessSDK\DTOs\BillingRequest\Links $links;
    public \GoCardlessSDK\DTOs\BillingRequest\Mandate\Request $mandate_request;
    public \GoCardlessSDK\DTOs\BillingRequest\NullableMetadata $metadata;
    public \GoCardlessSDK\DTOs\BillingRequest\Payment\Request $payment_request;
    public \GoCardlessSDK\Enums\BillingRequest\Status $status;
    public \GoCardlessSDK\DTOs\BillingRequest\Subscription\Request $subscription_request;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_information_request' => $value instanceof \stdClass ? $this->account_information_request = new \GoCardlessSDK\DTOs\BillingRequest\AccountInformation\Request($value) : parent::assignMember($name, $value),
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'instalment_schedule_request' => $value instanceof \stdClass ? $this->instalment_schedule_request = new \GoCardlessSDK\DTOs\BillingRequest\InstalmentSchedule\Request($value) : parent::assignMember($name, $value),
            'links' => $value instanceof \stdClass ? $this->links = new \GoCardlessSDK\DTOs\BillingRequest\Links($value) : parent::assignMember($name, $value),
            'mandate_request' => $value instanceof \stdClass ? $this->mandate_request = new \GoCardlessSDK\DTOs\BillingRequest\Mandate\Request($value) : parent::assignMember($name, $value),
            'payment_request' => $value instanceof \stdClass ? $this->payment_request = new \GoCardlessSDK\DTOs\BillingRequest\Payment\Request($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \GoCardlessSDK\Enums\BillingRequest\Status::from($value) : parent::assignMember($name, $value),
            'subscription_request' => $value instanceof \stdClass ? $this->subscription_request = new \GoCardlessSDK\DTOs\BillingRequest\Subscription\Request($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
