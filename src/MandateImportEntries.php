<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class MandateImportEntries extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /mandate_import_entries [operationId: list_mandate_import_entry] */
    /**
     * List all mandate import entries
     *
     * For an existing mandate import, this endpoint lists all of the entries attached.
     *
     * After a mandate import has been submitted, you can use this endpoint to associate records
     * in your system (using the `record_identifier` that you provided when creating the
     * mandate import).
     *
     */
    public static function get(\GoCardlessSDK\GetParams\MandateImportEntries $params): \GoCardlessSDK\DTOs\Mandate\ImportEntryMultiResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\MandateImportEntries::class)->get($params);
    }

    /** POST /mandate_import_entries [operationId: create_mandate_import_entry] */
    /**
     * Add a mandate import entry
     *
     * For an existing [mandate import](https://docs.gocardless.com/docs/api-reference/mandate-import), this endpoint can
     * be used to add individual mandates to be imported into GoCardless.
     *
     * You can add no more than 30,000 rows to a single mandate import.
     * If you attempt to go over this limit, the API will return a `record_limit_exceeded` error.
     */
    public static function post(\GoCardlessSDK\PostParams\MandateImportEntries $params): \GoCardlessSDK\DTOs\Mandate\ImportEntrySingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\MandateImportEntries::class)->post($params);
    }

}
