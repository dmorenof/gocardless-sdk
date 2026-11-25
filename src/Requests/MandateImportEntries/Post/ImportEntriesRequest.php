<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\MandateImportEntries\Post;

final class ImportEntriesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'bank_account',
    'customer',
    'links',
];

    protected const array VALIDATION = [
    'record_identifier' => [
        'maxLength' => 255,
    ],
];

    public \GoCardlessSDK\Requests\MandateImportEntries\Post\MandateImportEntries\EntriesAmendmentRequest $amendment;
    public \GoCardlessSDK\Requests\MandateImportEntries\Post\MandateImportEntries\BankAccountRequest $bank_account;
    public \GoCardlessSDK\Requests\MandateImportEntries\Post\MandateImportEntries\EntriesCustomerRequest $customer;
    public \GoCardlessSDK\Requests\MandateImportEntries\Post\MandateImportEntries\EntriesLinksRequest $links;
    public \GoCardlessSDK\Requests\MandateImportEntries\Post\MandateImportEntries\EntriesMandateRequest $mandate;
    /**
     * A unique identifier for this entry, which you can use (once the import has been
     * processed by GoCardless) to identify the records that have been created. Limited
     * to 255 characters.
     *
     */
    public ?string $record_identifier {
        set {
            $this->assigning('record_identifier', $value);
            $this->record_identifier = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'record_identifier' => $value === null || is_string($value) ? $this->record_identifier = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
