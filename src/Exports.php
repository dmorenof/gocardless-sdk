<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class Exports extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /exports [operationId: list_export] */
    /**
     * List exports
     *
     * Returns a list of exports which are available for download.
     *
     * <p class="restricted-notice"><strong>Restricted</strong>: This endpoint is restricted to GoCardless Embed customers. Please email [embed-commercial-team&#64;gocardless.com](mailto:embed-commercial-team&#64;gocardless.com) if you are interested in using this product.</p>
     */
    public static function get(\GoCardlessSDK\GetParams\Exports $params): \GoCardlessSDK\DTOs\Export\MultiResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Exports::class)->get($params);
    }

    /** GET /exports/{export_id} [operationId: get_exports] */
    /**
     * Get a single export
     *
     * Returns a single export.
     *
     * <p class="restricted-notice"><strong>Restricted</strong>: This endpoint is restricted to GoCardless Embed customers. Please email [embed-commercial-team&#64;gocardless.com](mailto:embed-commercial-team&#64;gocardless.com) if you are interested in using this product.</p>
     */
    public static function getByExportId(string $export_id, \GoCardlessSDK\GetParams\Exports\ByExportId $params): \GoCardlessSDK\DTOs\Export\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Exports::class)->getByExportId($export_id, $params);
    }

}
