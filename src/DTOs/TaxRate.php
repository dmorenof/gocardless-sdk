<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs;

/**
 * Tax Rates
 *
 * Tax rates from tax authority.
 *
 * We also maintain a [static list of the tax rates for each jurisdiction](https://docs.gocardless.com/docs/api-reference/tax-rates).
 */
final class TaxRate extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'end_date',
    'id',
    'jurisdiction',
    'percentage',
    'start_date',
    'type',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Date at which GoCardless stopped applying the tax rate for the jurisdiction.
     * Format: date
     */
    public ?string $end_date;
    /**
     * The unique identifier created by the jurisdiction, tax type and version
     */
    public string $id;
    /**
     * The jurisdiction this tax rate applies to
     */
    public string $jurisdiction;
    /**
     * The percentage of tax that is applied onto of GoCardless fees
     */
    public string $percentage;
    /**
     * Date at which GoCardless started applying the tax rate in the jurisdiction.
     * Format: date
     */
    public string $start_date;
    /**
     * The type of tax applied by this rate
     */
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'end_date' => $value === null || is_string($value) ? $this->end_date = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'jurisdiction' => is_string($value) ? $this->jurisdiction = $value : parent::assignMember($name, $value),
            'percentage' => is_string($value) ? $this->percentage = $value : parent::assignMember($name, $value),
            'start_date' => is_string($value) ? $this->start_date = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
