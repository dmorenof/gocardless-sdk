<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class OutboundPaymentImportEntries extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /outbound_payment_import_entries [operationId: list_outbound_payment_import_entry] */
    /**
     * List outbound payment import entries
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of the entries for a given outbound payment import.
     */
    public static function get(\GoCardlessSDK\GetParams\OutboundPaymentImportEntries $params): \GoCardlessSDK\DTOs\OutboundPayment\ImportEntryMultiResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\OutboundPaymentImportEntries::class)->get($params);
    }

}
