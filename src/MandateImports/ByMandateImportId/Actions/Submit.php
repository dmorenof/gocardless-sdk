<?php

declare(strict_types=1);

namespace GoCardlessSDK\MandateImports\ByMandateImportId\Actions;

final class Submit extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /mandate_imports/{mandate_import_id}/actions/submit [operationId: submit_mandate_import] */
    /**
     * Submit a mandate import
     *
     * Submits the mandate import, which allows it to be processed by a member of the
     * GoCardless team. Once the import has been submitted, it can no longer have entries
     * added to it.
     *
     * In our sandbox environment, to aid development, we automatically process mandate
     * imports approximately 10 seconds after they are submitted. This will allow you to
     * test both the "submitted" response and wait for the webhook to confirm the
     * processing has begun.
     */
    public static function post(string $mandate_import_id, \GoCardlessSDK\PostParams\MandateImports\ByMandateImportId\Actions\Submit $params): \GoCardlessSDK\DTOs\Mandate\ImportSingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\MandateImports\ByMandateImportId\Actions\Submit::class)->post($mandate_import_id, $params);
    }
}
