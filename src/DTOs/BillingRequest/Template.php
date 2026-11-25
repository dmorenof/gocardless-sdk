<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest;

/**
 * Billing Request Templates
 *
 * Billing Request Templates are reusable templates that result in
 * numerous Billing Requests with similar attributes. They provide
 * a no-code solution for generating various types of multi-user payment links.
 *
 * Each template includes a reusable URL that can be embedded in a website
 * or shared with customers via email. Every time the URL is opened,
 * it generates a new Billing Request.
 *
 * Billing Request Templates overcome the key limitation of the Billing Request:
 * a Billing Request cannot be shared among multiple users because it is intended
 * for single-use and is designed to cater to the unique needs of individual customers.
 */
final class Template extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'authorisation_url',
        'created_at',
        'id',
        'mandate_request_constraints',
        'mandate_request_currency',
        'mandate_request_description',
        'mandate_request_metadata',
        'mandate_request_scheme',
        'mandate_request_verify',
        'metadata',
        'name',
        'payment_request_amount',
        'payment_request_currency',
        'payment_request_description',
        'payment_request_metadata',
        'payment_request_scheme',
        'redirect_uri',
        'updated_at',
    ];

    protected const array VALIDATION = [
        'name' => [
            'maxLength' => 255,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Permanent URL that customers can visit to allow them to complete a flow based on this template, before being returned to the `redirect_uri`.
     */
    public string $authorisation_url;
    /**
     * Fixed [timestamp](https://docs.gocardless.com/docs/api-reference/data-conventions#dates-and-times), recording when this resource was created.
     * Format: date-time
     */
    public string $created_at;
    /**
     * Unique identifier, beginning with "BRT".
     */
    public string $id;
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
    /**
     * Dynamic [timestamp](https://docs.gocardless.com/docs/api-reference/data-conventions#dates-and-times) recording when this resource was last updated.
     * Format: date-time
     */
    public string $updated_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'authorisation_url' => is_string($value) ? $this->authorisation_url = $value : parent::assignMember($name, $value),
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'mandate_request_constraints' => $value instanceof \stdClass ? $this->mandate_request_constraints = new \GoCardlessSDK\DTOs\BillingRequest\MandateRequestConstraints($value) : parent::assignMember($name, $value),
            'mandate_request_description' => $value === null || is_string($value) ? $this->mandate_request_description = $value : parent::assignMember($name, $value),
            'mandate_request_scheme' => $value === null || is_string($value) ? $this->mandate_request_scheme = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'payment_request_amount' => $value === null || is_string($value) ? $this->payment_request_amount = $value : parent::assignMember($name, $value),
            'payment_request_description' => $value === null || is_string($value) ? $this->payment_request_description = $value : parent::assignMember($name, $value),
            'payment_request_scheme' => $value === null || is_string($value) ? $this->payment_request_scheme = $value : parent::assignMember($name, $value),
            'redirect_uri' => $value === null || is_string($value) ? $this->redirect_uri = $value : parent::assignMember($name, $value),
            'updated_at' => is_string($value) ? $this->updated_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
