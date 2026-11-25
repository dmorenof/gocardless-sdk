<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\Subscriptions\BySubscriptionId\Put;

final class BySubscriptionIdSubscriptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Subscription\AnyOfAmountStringable $amount;
    public \GoCardlessSDK\DTOs\Subscription\OneOfAppFeeStringable $app_fee;
    public \GoCardlessSDK\DTOs\Customer\Metadata $metadata;
    /**
     * Optional name for the subscription. This will be set as the description on each payment created. Must not exceed 255 characters.
     */
    public ?string $name;
    /**
     * An optional payment reference. This will be set as the reference on each payment
     * created and will appear on your customer's bank statement. See the documentation for
     * the [create payment endpoint](https://docs.gocardless.com/docs/api-reference/payment#create-a-payment) for more details.
     * <br />
     * <p class="restricted-notice"><strong>Restricted</strong>: You need your own Service User Number to specify a payment reference for Bacs payments.</p>
     */
    public ?string $payment_reference;
    /**
     * On failure, automatically retry payments using [intelligent retries](https://docs.gocardless.com/docs/optimise/reduced-failed-payments-with-success-plus). Default is `false`. <p class="notice"><strong>Important</strong>: To be able to use intelligent retries, Success+ needs to be enabled in [GoCardless dashboard](https://manage.gocardless.com/success-plus). </p>
     */
    public bool $retry_if_possible;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => $value === null || is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'payment_reference' => $value === null || is_string($value) ? $this->payment_reference = $value : parent::assignMember($name, $value),
            'retry_if_possible' => is_bool($value) ? $this->retry_if_possible = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
