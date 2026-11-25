<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\OutboundPayment;

/**
 * Outbound Payment Imports
 *
 * Outbound Payment Imports allow you to create multiple payments via a single API call.
 *
 * The Workflow:
 * 1. Create the outbound payment import.
 * 2. Retrieve an authorisation link from the response.
 * 3. Redirect the user to the link to authorise the import.
 * 4. Once the user authorises the import, the individual outbound payments are automatically submitted.
 *
 * Import entries are not processed as actual payments until they are reviewed and authorised in GoCardless Dashboard.
 * Upon approval, a unique outbound payment is generated for every entry in the import.
 *
 * <p class="notice">Outbound Payment Imports are capped at 1000 entries. If you expect to exceed this limit, please create multiple smaller imports.</p>
 */
final class Import extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * The sum of all import entry amounts, in the lowest denomination for the currency (e.g. pence in GBP, cents in EUR).
     */
    public int $amount_sum;
    /**
     * The link to the GoCardless dashboard to review and authorise the import
     */
    public string $authorisation_url;
    /**
     * Fixed [timestamp](https://docs.gocardless.com/docs/api-reference/data-conventions#dates-and-times), recording when this resource was created.
     * Format: date-time
     */
    public string $created_at;
    public \GoCardlessSDK\Enums\OutboundPayment\Currency $currency;
    public \GoCardlessSDK\DTOs\OutboundPayment\ImportEntryCounts $entry_counts;
    /**
     * Unique identifier, beginning with "IM".
     */
    public string $id;
    public \GoCardlessSDK\DTOs\OutboundPayment\ImportLinks $links;
    public \GoCardlessSDK\Enums\OutboundPayment\ImportStatus $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_sum' => is_int($value) ? $this->amount_sum = $value : parent::assignMember($name, $value),
            'authorisation_url' => is_string($value) ? $this->authorisation_url = $value : parent::assignMember($name, $value),
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = \GoCardlessSDK\Enums\OutboundPayment\Currency::from($value) : parent::assignMember($name, $value),
            'entry_counts' => $value instanceof \stdClass ? $this->entry_counts = new \GoCardlessSDK\DTOs\OutboundPayment\ImportEntryCounts($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'links' => $value instanceof \stdClass ? $this->links = new \GoCardlessSDK\DTOs\OutboundPayment\ImportLinks($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \GoCardlessSDK\Enums\OutboundPayment\ImportStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
