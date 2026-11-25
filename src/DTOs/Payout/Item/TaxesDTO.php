<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Payout\Item;

final class TaxesDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The amount of tax applied to a fee in fractional currency; the lowest denomination for the currency (e.g. pence in GBP, cents in EUR), to one decimal place.
     * Example: "1.1"
     */
    public string $amount;
    /**
     * [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217#Active_codes) currency code. Currently "AUD", "CAD", "DKK", "EUR", "GBP", "NZD", "SEK" and "USD" are supported.
     * Example: "EUR"
     */
    public \GoCardlessSDK\Enums\Payout\Item\TaxesItem\CurrencyEnum $currency;
    /**
     * The amount of tax to be paid out to the tax authorities in fractional currency; the lowest denomination for the currency (e.g. pence in GBP, cents in EUR), to one decimal place.
     *
     * When `currency` and `destination_currency` don't match this will be `null` until the `exchange_rate` has been finalised.
     * Example: "1.1"
     */
    public ?string $destination_amount;
    /**
     * [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217#Active_codes) code for the currency in which tax is paid out to the tax authorities of your tax jurisdiction. Currently “EUR” for French merchants and “GBP” for British merchants.
     * Example: "EUR"
     */
    public string $destination_currency;
    /**
     * The exchange rate for the tax from the currency into the destination currency.
     *
     * Present only if the currency and the destination currency don't match and the exchange rate has been finalised.
     *
     * You can listen for the payout's [`tax_exchange_rates_confirmed` webhook](https://docs.gocardless.com/docs/api-reference/events/payout) to know when the exchange rate has been finalised for all fees in the payout.
     * Example: "1.11205"
     */
    public ?string $exchange_rate;
    /**
     * The unique identifier created by the jurisdiction, tax type and version
     */
    public string $tax_rate_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_string($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = \GoCardlessSDK\Enums\Payout\Item\TaxesItem\CurrencyEnum::from($value) : parent::assignMember($name, $value),
            'destination_amount' => $value === null || is_string($value) ? $this->destination_amount = $value : parent::assignMember($name, $value),
            'destination_currency' => is_string($value) ? $this->destination_currency = $value : parent::assignMember($name, $value),
            'exchange_rate' => $value === null || is_string($value) ? $this->exchange_rate = $value : parent::assignMember($name, $value),
            'tax_rate_id' => is_string($value) ? $this->tax_rate_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
