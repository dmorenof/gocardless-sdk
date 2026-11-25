<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class TaxRates extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /tax_rates [operationId: list_tax_rate] */
    /**
     * List tax rates
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of all tax rates.
     */
    public static function get(\GoCardlessSDK\GetParams\TaxRates $params): \GoCardlessSDK\DTOs\TaxRate\MultiResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\TaxRates::class)->get($params);
    }

    /** GET /tax_rates/{tax_rate_id} [operationId: get_tax_rates] */
    /**
     * Get a single tax rate
     *
     * Retrieves the details of a tax rate.
     */
    public static function getByTaxRateId(string $tax_rate_id, \GoCardlessSDK\GetParams\TaxRates\ByTaxRateId $params): \GoCardlessSDK\DTOs\TaxRate\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\TaxRates::class)->getByTaxRateId($tax_rate_id, $params);
    }
}
