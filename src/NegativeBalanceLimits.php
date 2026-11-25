<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class NegativeBalanceLimits extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /negative_balance_limits [operationId: list_negative_balance_limit] */
    /**
     * List negative balance limits
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of negative balance limits.
     *
     * <p class="restricted-notice"><strong>Restricted</strong>: This endpoint is restricted to GoCardless Embed customers. Please email [embed-commercial-team&#64;gocardless.com](mailto:embed-commercial-team&#64;gocardless.com) if you are interested in using this product.</p>
     */
    public static function get(\GoCardlessSDK\GetParams\NegativeBalanceLimits $params): \GoCardlessSDK\DTOs\NegativeBalanceLimit\MultiResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\NegativeBalanceLimits::class)->get($params);
    }

}
