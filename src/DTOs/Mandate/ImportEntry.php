<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Mandate;

/**
 * Mandate Import Entries
 *
 * Mandate Import Entries are added to a [Mandate Import](https://docs.gocardless.com/docs/api-reference/mandate-import).
 * Each entry corresponds to one mandate to be imported into GoCardless.
 *
 * To import a mandate you will need:
 * <ol>
 *   <li>Identifying information about the customer (name/company and address)</li>
 *   <li>Bank account details, consisting of an account holder name and
 *      either an IBAN or <a href="https://docs.gocardless.com/docs/api-reference/local-bank-details">local bank details</a></li>
 *   <li>Amendment details (SEPA only)</li>
 * </ol>
 *
 * We suggest you provide a `record_identifier` (which is unique within the context of a
 * single mandate import) to help you to identify mandates that have been created once the
 * import has been processed by GoCardless. You can
 * [list the mandate import entries](https://docs.gocardless.com/docs/api-reference/mandate-import-entry#list-all-mandate-import-entries),
 * match them up in your system using the `record_identifier`, and look at the `links`
 * fields to find the mandate, customer and customer bank account that have been imported.
 *
 * <p class="restricted-notice"><strong>Restricted</strong>: This API is currently only available for approved integrators - please <a href="mailto:help&#64;gocardless.com">get in touch</a> if you would like to use this API.</p>
 */
final class ImportEntry extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'created_at',
    'links',
    'processing_errors',
    'record_identifier',
];

    protected const array VALIDATION = [
    'record_identifier' => [
        'maxLength' => 255,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Fixed [timestamp](https://docs.gocardless.com/docs/api-reference/data-conventions#dates-and-times), recording when this resource was created.
     * Format: date-time
     */
    public string $created_at;
    public \GoCardlessSDK\DTOs\Mandate\ImportEntryLinks $links;
    public \GoCardlessSDK\DTOs\Mandate\ImportEntryProcessingErrors $processing_errors;
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
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'links' => $value instanceof \stdClass ? $this->links = new \GoCardlessSDK\DTOs\Mandate\ImportEntryLinks($value) : parent::assignMember($name, $value),
            'record_identifier' => $value === null || is_string($value) ? $this->record_identifier = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
