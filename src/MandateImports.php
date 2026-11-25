<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class MandateImports extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /mandate_imports [operationId: create_mandate_import] */
    /**
     * Create a new mandate import
     *
     * Mandate imports are first created, before mandates are added one-at-a-time, so
     * this endpoint merely signals the start of the import process. Once you've finished
     * adding entries to an import, you should
     * [submit](https://docs.gocardless.com/docs/api-reference/mandate-import#submit-a-mandate-import) it.
     */
    public static function post(\GoCardlessSDK\PostParams\MandateImports $params): \GoCardlessSDK\DTOs\Mandate\ImportSingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\MandateImports::class)->post($params);
    }

    /** GET /mandate_imports/{mandate_import_id} [operationId: get_mandate_imports] */
    /**
     * Get a mandate import
     *
     * Returns a single mandate import.
     */
    public static function getByMandateImportId(string $mandate_import_id, \GoCardlessSDK\GetParams\MandateImports\ByMandateImportId $params): \GoCardlessSDK\DTOs\Mandate\ImportSingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\MandateImports::class)->getByMandateImportId($mandate_import_id, $params);
    }

}
