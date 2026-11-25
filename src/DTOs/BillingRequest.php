<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs;

/**
 * Billing Requests
 *
 *  Billing Requests help create resources that require input or action from a customer. An example of required input might be additional customer billing details, while an action would be asking a customer to authorise a payment using their mobile banking app.
 *
 * See [Billing Requests: Overview](https://docs.gocardless.com/docs/collect-payments/setting-up-mandates) for how-to's, explanations and tutorials. <p class="notice"><strong>Important</strong>: All properties associated with `subscription_request` and `instalment_schedule_request` are only supported for ACH and PAD schemes.</p>
 */
final class BillingRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \GoCardlessSDK\DTOs\BillingRequest\AccountInformation\Request $account_information_request;
    /**
     * List of actions that can be performed before this billing request can be fulfilled.
     */
    public \GoCardlessSDK\Collections\BillingRequest\ActionsCollection $actions;
    /**
     * Fixed [timestamp](https://docs.gocardless.com/docs/api-reference/data-conventions#dates-and-times), recording when this resource was created.
     * Format: date-time
     */
    public string $created_at;
    /**
     * (Optional) If true, this billing request can fallback from instant payment to direct debit.
     * Should not be set if GoCardless payment intelligence feature is used.
     *
     * See [Billing Requests: Retain customers with Fallbacks](https://docs.gocardless.com/docs/optimise/retain-customers-with-fallbacks)
     * for more information.
     */
    public bool $fallback_enabled;
    /**
     * True if the billing request was completed with direct debit.
     */
    public bool $fallback_occurred;
    /**
     * Unique identifier, beginning with "BRQ".
     */
    public string $id;
    public \GoCardlessSDK\DTOs\BillingRequest\InstalmentSchedule\Request $instalment_schedule_request;
    public \GoCardlessSDK\DTOs\BillingRequest\Links $links;
    public \GoCardlessSDK\DTOs\BillingRequest\Mandate\Request $mandate_request;
    public \GoCardlessSDK\DTOs\BillingRequest\NullableMetadata $metadata;
    public \GoCardlessSDK\Enums\BillingRequest\PaymentContextCode $payment_context_code;
    /**
     * Specifies the underlying purpose of the payment. Defines the specific reason or type of service/goods the payment relates to, improving straight-through processing and compliance.
     * See [VRP Commercial Payment Purpose Codes](https://docs.gocardless.com/docs/collect-payments/scheme-guidance/vrp-purpose-codes) for the complete list of valid codes.
     */
    public string $payment_purpose_code;
    public \GoCardlessSDK\DTOs\BillingRequest\Payment\Request $payment_request;
    public \GoCardlessSDK\Enums\BillingRequest\PurposeCode $purpose_code;
    public \GoCardlessSDK\DTOs\BillingRequest\Resources $resources;
    public \GoCardlessSDK\Enums\BillingRequest\Status $status;
    public \GoCardlessSDK\DTOs\BillingRequest\Subscription\Request $subscription_request;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_information_request' => $value instanceof \stdClass ? $this->account_information_request = new \GoCardlessSDK\DTOs\BillingRequest\AccountInformation\Request($value) : parent::assignMember($name, $value),
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'fallback_enabled' => is_bool($value) ? $this->fallback_enabled = $value : parent::assignMember($name, $value),
            'fallback_occurred' => is_bool($value) ? $this->fallback_occurred = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'instalment_schedule_request' => $value instanceof \stdClass ? $this->instalment_schedule_request = new \GoCardlessSDK\DTOs\BillingRequest\InstalmentSchedule\Request($value) : parent::assignMember($name, $value),
            'links' => $value instanceof \stdClass ? $this->links = new \GoCardlessSDK\DTOs\BillingRequest\Links($value) : parent::assignMember($name, $value),
            'mandate_request' => $value instanceof \stdClass ? $this->mandate_request = new \GoCardlessSDK\DTOs\BillingRequest\Mandate\Request($value) : parent::assignMember($name, $value),
            'payment_context_code' => is_string($value) ? $this->payment_context_code = \GoCardlessSDK\Enums\BillingRequest\PaymentContextCode::from($value) : parent::assignMember($name, $value),
            'payment_purpose_code' => is_string($value) ? $this->payment_purpose_code = $value : parent::assignMember($name, $value),
            'payment_request' => $value instanceof \stdClass ? $this->payment_request = new \GoCardlessSDK\DTOs\BillingRequest\Payment\Request($value) : parent::assignMember($name, $value),
            'purpose_code' => is_string($value) ? $this->purpose_code = \GoCardlessSDK\Enums\BillingRequest\PurposeCode::from($value) : parent::assignMember($name, $value),
            'resources' => $value instanceof \stdClass ? $this->resources = new \GoCardlessSDK\DTOs\BillingRequest\Resources($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \GoCardlessSDK\Enums\BillingRequest\Status::from($value) : parent::assignMember($name, $value),
            'subscription_request' => $value instanceof \stdClass ? $this->subscription_request = new \GoCardlessSDK\DTOs\BillingRequest\Subscription\Request($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
