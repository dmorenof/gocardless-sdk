<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class OutboundPaymentImports extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /outbound_payment_imports [operationId: list_outbound_payment_import] */
    /**
     * List outbound payment imports
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of your outbound payment imports.
     */
    public static function get(\GoCardlessSDK\GetParams\OutboundPaymentImports $params): \GoCardlessSDK\DTOs\OutboundPayment\ImportMultiResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\OutboundPaymentImports::class)->get($params);
    }

    /** POST /outbound_payment_imports [operationId: create_outbound_payment_import] */
    /**
     * Create an outbound payment import
     */
    public static function post(\GoCardlessSDK\PostParams\OutboundPaymentImports $params): \GoCardlessSDK\DTOs\OutboundPayment\ImportSingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\OutboundPaymentImports::class)->post($params);
    }

    /** GET /outbound_payment_imports/{outbound_payment_import_id} [operationId: get_outbound_payment_imports] */
    /**
     * Get an outbound payment import
     *
     * Returns a single outbound payment import.
     */
    public static function getByOutboundPaymentImportId(string $outbound_payment_import_id, \GoCardlessSDK\GetParams\OutboundPaymentImports\ByOutboundPaymentImportId $params): \GoCardlessSDK\DTOs\OutboundPayment\ImportSingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\OutboundPaymentImports::class)->getByOutboundPaymentImportId($outbound_payment_import_id, $params);
    }

}
