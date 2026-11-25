<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class VerificationDetails extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /verification_details [operationId: list_verification_detail] */
    /**
     * List verification details
     *
     * Returns a list of verification details belonging to a creditor.
     */
    public static function get(\GoCardlessSDK\GetParams\VerificationDetails $params): \GoCardlessSDK\DTOs\VerificationDetail\MultiResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\VerificationDetails::class)->get($params);
    }

    /** POST /verification_details [operationId: create_verification_detail] */
    /**
     * Create a verification detail
     *
     * Creates a new verification detail
     *
     * <p class="notice--warning"><strong>Warning</strong>: This endpoint only supports UK based limited companies. Therefore the
     * creditor's `creditor_type` must be `'company'` and `country_code` must be `'GB'`.</p>
     */
    public static function post(\GoCardlessSDK\PostParams\VerificationDetails $params): \GoCardlessSDK\DTOs\VerificationDetail\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\VerificationDetails::class)->post($params);
    }

}
