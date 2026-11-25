<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Mandate;

/**
 * MandateImportEntryLinks
 *
 * Related resources
 */
final class ImportEntryLinks extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'mandate_import',
];

    /**
     * The ID of the customer which was created when the mandate import was processed.
     */
    public string $customer;
    /**
     * The ID of the customer bank account which was created when the mandate import
     * was processed.
     */
    public string $customer_bank_account;
    /**
     * The ID of the mandate which was created when the mandate import was processed.
     */
    public string $mandate;
    /**
     * The ID of the mandate import. This is returned when you
     * [create a Mandate Import](https://docs.gocardless.com/docs/api-reference/mandate-import#create-a-new-mandate-import).
     *
     */
    public string $mandate_import;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'customer_bank_account' => is_string($value) ? $this->customer_bank_account = $value : parent::assignMember($name, $value),
            'mandate' => is_string($value) ? $this->mandate = $value : parent::assignMember($name, $value),
            'mandate_import' => is_string($value) ? $this->mandate_import = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
