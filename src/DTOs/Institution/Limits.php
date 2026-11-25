<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Institution;

/**
 * InstitutionLimits
 *
 * Defines individual limits for business and personal accounts.
 */
final class Limits extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Daily limit details for this institution, in the lowest denomination for the currency (e.g. pence in GBP, cents in EUR). The 'limits' property is only available via an authenticated request with a generated access token
     */
    public ?\GoCardlessSDK\DTOs\Institution\Limits\DailyDTO $daily;
    /**
     * Single transaction limit details for this institution, in the lowest denomination for the currency (e.g. pence in GBP, cents in EUR). The 'limits' property is only available via an authenticated request with a generated access token
     */
    public ?\GoCardlessSDK\DTOs\Institution\Limits\SingleDTO $single;

}
