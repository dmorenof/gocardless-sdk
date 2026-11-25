<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\Payments\Post;

final class PaymentsPaymentsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'amount',
    'currency',
    'links',
];

    public \GoCardlessSDK\DTOs\Payment\AnyOfAmountStringable $amount;
    public \GoCardlessSDK\DTOs\Payment\AppFee\OneOfRequest $app_fee;
    /**
     * A future date on which the payment should be collected. If not specified, the payment will be collected as soon as possible. If the value is before the [mandate](https://docs.gocardless.com/docs/api-reference/mandate)'s `next_possible_charge_date` creation will fail. If the value is not a working day it will be rolled forwards to the next available one.
     * Format: date
     */
    public ?string $charge_date;
    public \GoCardlessSDK\Enums\Payment\Currency $currency;
    /**
     * A human-readable description of the payment. This will be included in the notification email GoCardless sends to your customer if your organisation does not send its own notifications (see [compliance requirements](https://docs.gocardless.com/docs/api-reference/compliance-requirements)).
     */
    public ?string $description;
    /**
     * Set this to true or false in the request to create an ACH payment to
     * explicitly choose whether the payment should be processed through Faster
     * ACH or standard ACH, rather than relying on the presence or absence of the
     * charge date to indicate that.
     */
    public ?bool $faster_ach;
    public \GoCardlessSDK\Requests\Payments\Post\Payments\PaymentsLinksRequest $links;
    public \GoCardlessSDK\DTOs\Customer\Metadata $metadata;
    public \GoCardlessSDK\Enums\Payment\PsuInteractionType $psu_interaction_type;
    /**
     * An optional reference that will appear on your customer's bank statement. The character limit for this reference is dependent on the scheme.<br /> <strong>ACH</strong> - 10 characters<br /> <strong>Autogiro</strong> - 11 characters<br /> <strong>Bacs</strong> - 10 characters<br /> <strong>BECS</strong> - 30 characters<br /> <strong>BECS NZ</strong> - 12 characters<br /> <strong>Betalingsservice</strong> - 30 characters<br /> <strong>Faster Payments</strong> - 18 characters<br /> <strong>PAD</strong> - scheme doesn't offer references<br /> <strong>PayTo</strong> - 18 characters<br /> <strong>SEPA</strong> - 140 characters<br /> Note that this reference must be unique (for each merchant) for the BECS scheme as it is a scheme requirement. <p class='restricted-notice'><strong>Restricted</strong>: You can only specify a payment reference for Bacs payments (that is, when collecting from the UK) if you're on the <a href='https://gocardless.com/pricing'>GoCardless Plus, Pro or Enterprise packages</a>.</p> <p class='restricted-notice'><strong>Restricted</strong>: You can not specify a payment reference for Faster Payments.</p>
     */
    public ?string $reference;
    /**
     * On failure, automatically retry the payment using [intelligent retries](https://docs.gocardless.com/docs/optimise/reduced-failed-payments-with-success-plus). Default is `false`. <p class="notice"><strong>Important</strong>: To be able to use intelligent retries, Success+ needs to be enabled in [GoCardless dashboard](https://manage.gocardless.com/success-plus). </p>
     */
    public bool $retry_if_possible;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'charge_date' => $value === null || is_string($value) ? $this->charge_date = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = \GoCardlessSDK\Enums\Payment\Currency::from($value) : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'faster_ach' => $value === null || is_bool($value) ? $this->faster_ach = $value : parent::assignMember($name, $value),
            'psu_interaction_type' => is_string($value) ? $this->psu_interaction_type = \GoCardlessSDK\Enums\Payment\PsuInteractionType::from($value) : parent::assignMember($name, $value),
            'reference' => $value === null || is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'retry_if_possible' => is_bool($value) ? $this->retry_if_possible = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
