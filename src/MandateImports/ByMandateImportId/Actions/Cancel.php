<?php

declare(strict_types=1);

namespace GoCardlessSDK\MandateImports\ByMandateImportId\Actions;

final class Cancel extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /mandate_imports/{mandate_import_id}/actions/cancel [operationId: cancel_mandate_import] */
    /**
     * Cancel a mandate import
     *
     * Cancels the mandate import, which aborts the import process and stops the mandates
     * being set up in GoCardless. Once the import has been cancelled, it can no longer have
     * entries added to it. Mandate imports which have already been submitted or processed
     * cannot be cancelled.
     */
    public static function post(string $mandate_import_id, \GoCardlessSDK\PostParams\MandateImports\ByMandateImportId\Actions\Cancel $params): \GoCardlessSDK\DTOs\Mandate\ImportSingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\MandateImports\ByMandateImportId\Actions\Cancel::class)->post($mandate_import_id, $params);
    }
}
