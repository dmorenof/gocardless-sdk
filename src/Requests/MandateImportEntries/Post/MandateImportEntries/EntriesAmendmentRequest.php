<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\MandateImportEntries\Post\MandateImportEntries;

final class EntriesAmendmentRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'original_creditor_id',
        'original_creditor_name',
        'original_mandate_reference',
    ];

    /**
     * The creditor identifier of the direct debit originator. Required if mandate
     * import scheme is `sepa`.
     *
     * Example: "FR123OTHERBANK"
     */
    public string $original_creditor_id;
    /**
     * Data about the original mandate to be moved or modified.
     *
     * Example: "Existing DD Provider"
     */
    public string $original_creditor_name;
    /**
     * The unique SEPA reference for the mandate being amended. Required if mandate
     * import scheme is `sepa`.
     *
     * Example: "REFNMANDATE"
     */
    public string $original_mandate_reference;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'original_creditor_id' => is_string($value) ? $this->original_creditor_id = $value : parent::assignMember($name, $value),
            'original_creditor_name' => is_string($value) ? $this->original_creditor_name = $value : parent::assignMember($name, $value),
            'original_mandate_reference' => is_string($value) ? $this->original_mandate_reference = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
