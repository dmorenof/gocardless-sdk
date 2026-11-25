<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class CurrencyExchangeRates extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /currency_exchange_rates [operationId: list_currency_exchange_rate] */
    /**
     * List exchange rates
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of all exchange rates.
     */
    public static function get(\GoCardlessSDK\GetParams\CurrencyExchangeRates $params): \GoCardlessSDK\DTOs\CurrencyExchangeRate\MultiResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\CurrencyExchangeRates::class)->get($params);
    }
}
