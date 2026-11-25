<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\Creditors\ByCreditorId\Put;

final class ByCreditorIdCreditorsRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The first line of the creditor's address.
     */
    public ?string $address_line1;
    /**
     * The second line of the creditor's address.
     */
    public ?string $address_line2;
    /**
     * The third line of the creditor's address.
     */
    public ?string $address_line3;
    /**
     * Prefix for the bank reference of payouts sent to this creditor. For instance, if
     * the creditor's `bank_reference_prefix` was `ACME`, the bank reference of a payout
     * sent to that creditor could be `ACME-8G7Q8`.
     *
     * This prefix is also used for refunds in EUR and GBP.
     *
     */
    public string $bank_reference_prefix;
    /**
     * The city of the creditor's address.
     */
    public ?string $city;
    /**
     * [ISO 3166-1 alpha-2 code.](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2#Officially_assigned_code_elements)
     */
    public ?string $country_code;
    public \GoCardlessSDK\Requests\Creditors\ByCreditorId\Put\Creditors\CreditorsLinksRequest $links;
    /**
     * The creditor's trading name.
     */
    public string $name;
    /**
     * The creditor's postal code.
     */
    public ?string $postal_code;
    /**
     * The creditor's address region, county or department.
     */
    public ?string $region;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address_line1' => $value === null || is_string($value) ? $this->address_line1 = $value : parent::assignMember($name, $value),
            'address_line2' => $value === null || is_string($value) ? $this->address_line2 = $value : parent::assignMember($name, $value),
            'address_line3' => $value === null || is_string($value) ? $this->address_line3 = $value : parent::assignMember($name, $value),
            'bank_reference_prefix' => is_string($value) ? $this->bank_reference_prefix = $value : parent::assignMember($name, $value),
            'city' => $value === null || is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'country_code' => $value === null || is_string($value) ? $this->country_code = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'postal_code' => $value === null || is_string($value) ? $this->postal_code = $value : parent::assignMember($name, $value),
            'region' => $value === null || is_string($value) ? $this->region = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
