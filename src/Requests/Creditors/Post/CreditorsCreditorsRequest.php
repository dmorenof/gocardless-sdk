<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\Creditors\Post;

final class CreditorsCreditorsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'country_code',
    'creditor_type',
    'name',
];

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
     * [ISO 3166-1 alpha-2 code.](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2#Officially_assigned_code_elements)
     */
    public ?string $country_code;
    public \GoCardlessSDK\Enums\Creditor\CreditorType $creditor_type;
    public \GoCardlessSDK\Requests\Creditors\Post\Creditors\CreditorsLinksRequest $links;
    /**
     * The creditor's trading name.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank_reference_prefix' => is_string($value) ? $this->bank_reference_prefix = $value : parent::assignMember($name, $value),
            'country_code' => $value === null || is_string($value) ? $this->country_code = $value : parent::assignMember($name, $value),
            'creditor_type' => is_string($value) ? $this->creditor_type = \GoCardlessSDK\Enums\Creditor\CreditorType::from($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
