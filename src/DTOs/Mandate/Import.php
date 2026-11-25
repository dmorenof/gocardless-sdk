<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Mandate;

/**
 * Mandate Imports
 *
 * Mandate Imports allow you to migrate existing mandates from other providers into the
 * GoCardless platform.
 *
 * The process is as follows:
 *
 *   1. [Create a mandate import](https://docs.gocardless.com/docs/api-reference/mandate-import#create-a-new-mandate-import)
 *   2. [Add entries](https://docs.gocardless.com/docs/api-reference/mandate-import-entry#add-a-mandate-import-entry) to the import
 *   3. [Submit](https://docs.gocardless.com/docs/api-reference/mandate-import#submit-a-mandate-import) the import
 *   4. Wait until a member of the GoCardless team approves the import, at which point the mandates will be created
 *   5. [Link up the mandates](https://docs.gocardless.com/docs/api-reference/mandate-import-entry#list-all-mandate-import-entries) in your system
 *
 * When you add entries to your mandate import, they are not turned into actual mandates
 * until the mandate import is submitted by you via the API, and then processed by a member
 * of the GoCardless team. When that happens, a mandate will be created for each entry in the import.
 *
 * We will issue a `mandate_created` webhook for each entry, which will be the same as the webhooks
 * triggered when [ creating a mandate ](https://docs.gocardless.com/docs/api-reference/mandate#create-a-mandate) using the mandates API. Once these
 * webhooks start arriving, any reconciliation can now be accomplished by
 * [checking the current status](https://docs.gocardless.com/docs/api-reference/mandate-import#get-a-mandate-import) of the mandate import and
 * [linking up the mandates to your system](https://docs.gocardless.com/docs/api-reference/mandate-import-entry#list-all-mandate-import-entries).
 *
 * <p class="notice">Note that all Mandate Imports have an upper limit of 30,000 entries, so we recommend you split your import into several smaller imports if you're planning to exceed this threshold.</p>
 *
 * <p class="restricted-notice"><strong>Restricted</strong>: This API is currently only available for approved integrators - please <a href="mailto:help&#64;gocardless.com">get in touch</a> if you would like to use this API.</p>
 */
final class Import extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created_at',
        'id',
        'links',
        'scheme',
        'status',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Fixed [timestamp](https://docs.gocardless.com/docs/api-reference/data-conventions#dates-and-times), recording when this resource was created.
     * Format: date-time
     */
    public string $created_at;
    /**
     * Unique identifier, beginning with "IM".
     */
    public string $id;
    public \GoCardlessSDK\DTOs\Mandate\ImportLinks $links;
    public \GoCardlessSDK\Enums\Mandate\ImportScheme $scheme;
    public \GoCardlessSDK\Enums\Mandate\ImportStatus $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'links' => $value instanceof \stdClass ? $this->links = new \GoCardlessSDK\DTOs\Mandate\ImportLinks($value) : parent::assignMember($name, $value),
            'scheme' => is_string($value) ? $this->scheme = \GoCardlessSDK\Enums\Mandate\ImportScheme::from($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \GoCardlessSDK\Enums\Mandate\ImportStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
