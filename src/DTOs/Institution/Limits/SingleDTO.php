<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Institution\Limits;

/**
 * Single transaction limit details for this institution, in the lowest denomination for the currency (e.g. pence in GBP, cents in EUR). The 'limits' property is only available via an authenticated request with a generated access token
 */
final class SingleDTO extends \Dmorenof\SdkRuntime\DTO
{
}
