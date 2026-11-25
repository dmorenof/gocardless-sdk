<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\BillingRequests\CreateWithActions\Post;

final class WithActionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Action payloads
     */
    public \GoCardlessSDK\Requests\BillingRequests\CreateWithActions\Post\BillingRequestWithActions\ActionsActionsRequest $actions;
    /**
     * (Optional) If true, this billing request can fallback from instant payment to direct debit.
     * Should not be set if GoCardless payment intelligence feature is used.
     *
     * See [Billing Requests: Retain customers with Fallbacks](https://docs.gocardless.com/docs/optimise/retain-customers-with-fallbacks)
     * for more information.
     */
    public bool $fallback_enabled;
    public \GoCardlessSDK\Requests\BillingRequests\CreateWithActions\Post\BillingRequestWithActions\ActionsLinksRequest $links;
    public \GoCardlessSDK\Requests\BillingRequests\CreateWithActions\Post\BillingRequestWithActions\ActionsMandateRequest $mandate_request;
    public \GoCardlessSDK\DTOs\Customer\Metadata $metadata;
    public \GoCardlessSDK\Enums\BillingRequest\PaymentContextCode $payment_context_code;
    /**
     * Specifies the underlying purpose of the payment. Defines the specific reason or type of service/goods the payment relates to, improving straight-through processing and compliance.
     * See [VRP Commercial Payment Purpose Codes](https://docs.gocardless.com/docs/collect-payments/scheme-guidance/vrp-purpose-codes) for the complete list of valid codes.
     */
    public string $payment_purpose_code;
    public \GoCardlessSDK\Requests\BillingRequests\CreateWithActions\Post\BillingRequestWithActions\ActionsPaymentRequest $payment_request;
    public \GoCardlessSDK\Enums\BillingRequest\PurposeCode $purpose_code;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fallback_enabled' => is_bool($value) ? $this->fallback_enabled = $value : parent::assignMember($name, $value),
            'payment_context_code' => is_string($value) ? $this->payment_context_code = \GoCardlessSDK\Enums\BillingRequest\PaymentContextCode::from($value) : parent::assignMember($name, $value),
            'payment_purpose_code' => is_string($value) ? $this->payment_purpose_code = $value : parent::assignMember($name, $value),
            'purpose_code' => is_string($value) ? $this->purpose_code = \GoCardlessSDK\Enums\BillingRequest\PurposeCode::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
