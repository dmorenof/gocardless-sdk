<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\BillingRequestTemplates\Post;

final class BillingTemplatesRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'name' => [
            'maxLength' => 255,
        ],
    ];

    public \GoCardlessSDK\Requests\BillingRequestTemplates\Post\BillingRequestTemplates\TemplatesLinksRequest $links;
    public \GoCardlessSDK\DTOs\BillingRequest\MandateRequestConstraints $mandate_request_constraints;
    public \GoCardlessSDK\DTOs\BillingRequest\OneOfTemplateMandateCurrency $mandate_request_currency;
    /**
     * A human-readable description of the payment and/or mandate. This will be displayed to the payer when authorising the billing request.
     *
     */
    public ?string $mandate_request_description;
    public \GoCardlessSDK\DTOs\BillingRequest\TemplateMandateRequestMetadata $mandate_request_metadata;
    /**
     * A bank payment scheme. Currently "ach", "autogiro", "bacs", "becs", "becs_nz", "betalingsservice", "faster_payments", "pad", "pay_to" and "sepa_core" are supported. Optional for mandate only requests - if left blank, the payer will be able to select the currency/scheme to pay with from a list of your available schemes.
     */
    public ?string $mandate_request_scheme;
    public \GoCardlessSDK\DTOs\BillingRequest\OneOfTemplateMandateRequestVerify $mandate_request_verify;
    public \GoCardlessSDK\DTOs\Customer\Metadata $metadata;
    /**
     * Name for the template. Provides a friendly human name for the template, as it is shown in the dashboard. Must not exceed 255 characters.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * Amount in full.
     */
    public ?string $payment_request_amount;
    public \GoCardlessSDK\DTOs\BillingRequest\OneOfTemplatePaymentCurrency $payment_request_currency;
    /**
     * A human-readable description of the payment and/or mandate. This will be displayed to the payer when authorising the billing request.
     *
     */
    public ?string $payment_request_description;
    public \GoCardlessSDK\DTOs\BillingRequest\TemplatePaymentRequestMetadata $payment_request_metadata;
    /**
     * (Optional) A scheme used for Open Banking payments. Currently `faster_payments` is supported in the UK (GBP) and `sepa_credit_transfer` and `sepa_instant_credit_transfer` are supported in supported Eurozone countries (EUR). For Eurozone countries, `sepa_credit_transfer` is used as the default. Please be aware that `sepa_instant_credit_transfer` may incur an additional fee for your customer.
     */
    public ?string $payment_request_scheme;
    /**
     * URL that the payer can be redirected to after completing the request flow.
     */
    public ?string $redirect_uri;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mandate_request_constraints' => $value instanceof \stdClass ? $this->mandate_request_constraints = new \GoCardlessSDK\DTOs\BillingRequest\MandateRequestConstraints($value) : parent::assignMember($name, $value),
            'mandate_request_description' => $value === null || is_string($value) ? $this->mandate_request_description = $value : parent::assignMember($name, $value),
            'mandate_request_scheme' => $value === null || is_string($value) ? $this->mandate_request_scheme = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'payment_request_amount' => $value === null || is_string($value) ? $this->payment_request_amount = $value : parent::assignMember($name, $value),
            'payment_request_description' => $value === null || is_string($value) ? $this->payment_request_description = $value : parent::assignMember($name, $value),
            'payment_request_scheme' => $value === null || is_string($value) ? $this->payment_request_scheme = $value : parent::assignMember($name, $value),
            'redirect_uri' => $value === null || is_string($value) ? $this->redirect_uri = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
