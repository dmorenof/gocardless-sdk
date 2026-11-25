<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class FundsAvailability extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /funds_availability/{mandate_id} [operationId: get_funds_availability] */
    /**
     * Funds availability
     *
     * Checks if the payer's current balance is sufficient to cover the amount
     * the merchant wants to charge within the consent parameters defined on the mandate.
     *
     * <p class="notice--warning"><strong>Warning</strong>: Funds availability check is available for VRP mandates only.</p>
     */
    public static function getByMandateId(string $mandate_id, \GoCardlessSDK\GetParams\FundsAvailability\ByMandateId $params): \GoCardlessSDK\Responses\FundsAvailability\ByMandateId\Get
    {
        return self::client()->resource(\GoCardlessSDK\Resources\FundsAvailability::class)->getByMandateId($mandate_id, $params);
    }
}
