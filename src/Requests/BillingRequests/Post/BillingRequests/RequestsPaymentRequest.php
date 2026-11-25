<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\BillingRequests\Post\BillingRequests;

final class RequestsPaymentRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'reference' => [
        'minLength' => 1,
        'maxLength' => 18,
    ],
];

    public \GoCardlessSDK\DTOs\BillingRequest\AnyOfAmountStringable $amount;
    public \GoCardlessSDK\DTOs\BillingRequest\OneOfAppFeeStringable $app_fee;
    /**
     * [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217#Active_codes) currency code. `GBP` and `EUR` supported; `GBP` with your customers in the UK and for `EUR` with your customers in supported Eurozone countries only.
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
     * A custom payment reference defined by the merchant. It is only available for payments on the PayTo scheme or payments using the Direct Funds settlement model on the Faster Payments scheme.
     *
     */
    public ?string $reference {
        set {
            $this->assigning('reference', $value);
            $this->reference = $value;
        }
    }
    /**
     * On failure, automatically retry payments using [intelligent retries](https://docs.gocardless.com/docs/optimise/reduced-failed-payments-with-success-plus). Default is `false`. <p class="notice"><strong>Important</strong>: To be able to use intelligent retries, Success+ needs to be enabled in [GoCardless dashboard](https://manage.gocardless.com/success-plus). </p> <p class="notice"><strong>Important</strong>: This is not applicable to Pay by Bank and VRP payments. </p>
     */
    public bool $retry_if_possible;
    /**
     * (Optional) A scheme used for Open Banking payments. Currently `faster_payments` is supported in the UK (GBP) and `sepa_credit_transfer` and `sepa_instant_credit_transfer` are supported in supported Eurozone countries (EUR). For Eurozone countries, `sepa_credit_transfer` is used as the default. Please be aware that `sepa_instant_credit_transfer` may incur an additional fee for your customer.
     */
    public ?string $scheme;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'funds_settlement' => is_string($value) ? $this->funds_settlement = \GoCardlessSDK\Enums\BillingRequest\FundsSettlement::from($value) : parent::assignMember($name, $value),
            'reference' => $value === null || is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'retry_if_possible' => is_bool($value) ? $this->retry_if_possible = $value : parent::assignMember($name, $value),
            'scheme' => $value === null || is_string($value) ? $this->scheme = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
