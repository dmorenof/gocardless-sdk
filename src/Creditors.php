<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class Creditors extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /creditors [operationId: list_creditor] */
    /**
     * List creditors
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of your creditors.
     */
    public static function get(\GoCardlessSDK\GetParams\Creditors $params): \GoCardlessSDK\DTOs\Creditor\MultiResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Creditors::class)->get($params);
    }

    /** POST /creditors [operationId: create_creditor] */
    /**
     * Create a creditor
     *
     * Creates a new creditor.
     *
     * <p class="restricted-notice"><strong>Restricted</strong>: This endpoint is restricted to GoCardless Embed customers. Please email [embed-commercial-team&#64;gocardless.com](mailto:embed-commercial-team&#64;gocardless.com) if you are interested in using this product. Partners should instead manage multiple merchant accounts by building a [partner integration](https://docs.gocardless.com/docs/partner-integrations/how-partner-integrations-work).</p>
     */
    public static function post(\GoCardlessSDK\PostParams\Creditors $params): \GoCardlessSDK\DTOs\Creditor\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Creditors::class)->post($params);
    }

    /** GET /creditors/{creditor_id} [operationId: get_creditors] */
    /**
     * Get a single creditor
     *
     * Retrieves the details of an existing creditor.
     */
    public static function getByCreditorId(string $creditor_id, \GoCardlessSDK\GetParams\Creditors\ByCreditorId $params): \GoCardlessSDK\DTOs\Creditor\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Creditors::class)->getByCreditorId($creditor_id, $params);
    }

    /** PUT /creditors/{creditor_id} [operationId: update_creditors] */
    /**
     * Update a creditor
     *
     * Updates a creditor object. Supports all of the fields supported when creating a creditor.
     */
    public static function putByCreditorId(string $creditor_id, \GoCardlessSDK\PutParams\Creditors\ByCreditorId $params): \GoCardlessSDK\DTOs\Creditor\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Creditors::class)->putByCreditorId($creditor_id, $params);
    }

}
