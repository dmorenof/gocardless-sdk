<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class Mandates extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /mandates [operationId: list_mandate] */
    /**
     * List mandates
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of your mandates.
     */
    public static function get(\GoCardlessSDK\GetParams\Mandates $params): \GoCardlessSDK\DTOs\Mandate\MultiResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Mandates::class)->get($params);
    }

    /** POST /mandates [operationId: create_mandate] */
    /**
     * Create a mandate
     *
     * Creates a new mandate object.
     *
     * <p class="restricted-notice"><strong>Restricted</strong>: this endpoint requires approved [custom payment pages](https://support.gocardless.com/hc/en-gb/articles/115004521925-Custom-Payment-Pages).</p>
     *
     * <p class="notice"><strong>Note</strong>: this endpoint is a legacy API endpoint and does not support GoCardless' newest features. We recommend using the [Billing Requests API](https://docs.gocardless.com/docs/collect-payments/setting-up-mandates) instead.</p>
     *
     * <p class="notice--warning"><strong>Warning</strong>: by default, the ability to provide a custom mandate reference is switched off. The banking system rules for valid references are quite complex, and we recommend allowing GoCardless to generate it. If you would like to provide custom references, please contact support.</p>
     */
    public static function post(\GoCardlessSDK\PostParams\Mandates $params): \GoCardlessSDK\DTOs\Mandate\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Mandates::class)->post($params);
    }

    /** GET /mandates/{mandate_id} [operationId: get_mandates] */
    /**
     * Get a single mandate
     *
     * Retrieves the details of an existing mandate.
     */
    public static function getByMandateId(string $mandate_id, \GoCardlessSDK\GetParams\Mandates\ByMandateId $params): \GoCardlessSDK\DTOs\Mandate\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Mandates::class)->getByMandateId($mandate_id, $params);
    }

    /** PUT /mandates/{mandate_id} [operationId: update_mandates] */
    /**
     * Update a mandate
     *
     * Updates a mandate object. This accepts only the metadata parameter.
     */
    public static function putByMandateId(string $mandate_id, \GoCardlessSDK\PutParams\Mandates\ByMandateId $params): \GoCardlessSDK\DTOs\Mandate\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Mandates::class)->putByMandateId($mandate_id, $params);
    }

}
