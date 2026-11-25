<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class OutboundPayments extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /outbound_payments [operationId: list_outbound_payment] */
    /**
     * List outbound payments
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of outbound payments.
     */
    public static function get(\GoCardlessSDK\GetParams\OutboundPayments $params): \GoCardlessSDK\DTOs\OutboundPayment\MultiResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\OutboundPayments::class)->get($params);
    }

    /** POST /outbound_payments [operationId: create_outbound_payment] */
    /**
     * Create an outbound payment
     */
    public static function post(\GoCardlessSDK\PostParams\OutboundPayments $params): \GoCardlessSDK\DTOs\OutboundPayment\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\OutboundPayments::class)->post($params);
    }

    /** GET /outbound_payments/{outbound_payment_id} [operationId: get_outbound_payments] */
    /**
     * Get an outbound payment
     *
     * Fetches an outbound_payment by ID
     */
    public static function getByOutboundPaymentId(string $outbound_payment_id, \GoCardlessSDK\GetParams\OutboundPayments\ByOutboundPaymentId $params): \GoCardlessSDK\DTOs\OutboundPayment\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\OutboundPayments::class)->getByOutboundPaymentId($outbound_payment_id, $params);
    }

    /** PUT /outbound_payments/{outbound_payment_id} [operationId: update_outbound_payments] */
    /**
     * Update an outbound payment
     *
     * Updates an outbound payment object. This accepts only the metadata parameter.
     */
    public static function putByOutboundPaymentId(string $outbound_payment_id, \GoCardlessSDK\PutParams\OutboundPayments\ByOutboundPaymentId $params): \GoCardlessSDK\DTOs\OutboundPayment\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\OutboundPayments::class)->putByOutboundPaymentId($outbound_payment_id, $params);
    }

}
