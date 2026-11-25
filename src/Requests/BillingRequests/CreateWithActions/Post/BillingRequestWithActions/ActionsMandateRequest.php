<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\BillingRequests\CreateWithActions\Post\BillingRequestWithActions;

final class ActionsMandateRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\Enums\BillingRequest\AuthorisationSource $authorisation_source;
    public \GoCardlessSDK\DTOs\BillingRequest\MandateRequestConstraints $constraints;
    /**
     * [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217#Active_codes) currency code.
     */
    public string $currency;
    /**
     * A human-readable description of the payment and/or mandate. This will be displayed to the payer when authorising the billing request.
     *
     */
    public ?string $description;
    public \GoCardlessSDK\Enums\BillingRequest\FundsSettlement $funds_settlement;
    public \GoCardlessSDK\DTOs\Customer\Metadata $metadata;
    /**
     * Unique reference. Different schemes have different length and [character set](https://docs.gocardless.com/docs/api-reference/character-sets) requirements. GoCardless will generate a unique reference satisfying the different scheme requirements if this field is left blank.
     */
    public ?string $reference;
    /**
     * A bank payment scheme. Currently "ach", "autogiro", "bacs", "becs", "becs_nz", "betalingsservice", "faster_payments", "pad", "pay_to" and "sepa_core" are supported. Optional for mandate only requests - if left blank, the payer will be able to select the currency/scheme to pay with from a list of your available schemes.
     */
    public ?string $scheme;
    /**
     * If true, this billing request would be used to set up a mandate solely for moving (or sweeping) money from one account owned by the payer to another account that the payer also owns. This is required for Faster Payments
     */
    public bool $sweeping;
    public \GoCardlessSDK\Enums\BillingRequest\MandateRequestVerify $verify;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'authorisation_source' => is_string($value) ? $this->authorisation_source = \GoCardlessSDK\Enums\BillingRequest\AuthorisationSource::from($value) : parent::assignMember($name, $value),
            'constraints' => $value instanceof \stdClass ? $this->constraints = new \GoCardlessSDK\DTOs\BillingRequest\MandateRequestConstraints($value) : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'funds_settlement' => is_string($value) ? $this->funds_settlement = \GoCardlessSDK\Enums\BillingRequest\FundsSettlement::from($value) : parent::assignMember($name, $value),
            'reference' => $value === null || is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'scheme' => $value === null || is_string($value) ? $this->scheme = $value : parent::assignMember($name, $value),
            'sweeping' => is_bool($value) ? $this->sweeping = $value : parent::assignMember($name, $value),
            'verify' => is_string($value) ? $this->verify = \GoCardlessSDK\Enums\BillingRequest\MandateRequestVerify::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
