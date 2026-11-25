<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Refund;

/**
 * RefundFx
 */
final class Fx extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Estimated rate that will be used in the foreign exchange of the `amount` into the `fx_currency`.
     * This will vary based on the prevailing market rate until the moment that it is paid out.
     * Present only before a resource is paid out. Has up to 10 decimal places.
     * Example: "1.1234567890"
     */
    public ?string $estimated_exchange_rate;
    /**
     * Rate used in the foreign exchange of the `amount` into the `fx_currency`.
     * Present only after a resource is paid out. Has up to 10 decimal places.
     * Example: "1.1234567890"
     */
    public ?string $exchange_rate;
    /**
     * Amount that was paid out in the `fx_currency` after foreign exchange.
     * Present only after the resource has been paid out.
     * Example: 1150
     */
    public \GoCardlessSDK\DTOs\Refund\Fx\FxAmountDTO $fx_amount;
    /**
     * [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217#Active_codes) code for the currency in which amounts will be paid out (after foreign exchange). Currently "AUD", "CAD", "DKK", "EUR", "GBP", "NZD", "SEK" and "USD" are supported. Present only if payouts will be (or were) made via foreign exchange.
     * Example: "EUR"
     */
    public ?\GoCardlessSDK\Enums\Refund\Fx\FxCurrencyEnum $fx_currency;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'estimated_exchange_rate' => $value === null || is_string($value) ? $this->estimated_exchange_rate = $value : parent::assignMember($name, $value),
            'exchange_rate' => $value === null || is_string($value) ? $this->exchange_rate = $value : parent::assignMember($name, $value),
            'fx_currency' => $value === null || is_string($value) ? $this->fx_currency = $value === null ? null : \GoCardlessSDK\Enums\Refund\Fx\FxCurrencyEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
