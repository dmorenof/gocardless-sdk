<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class Institutions extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /institutions [operationId: list_institution] */
    /**
     * List Institutions
     *
     * Returns a list of supported institutions.
     */
    public static function get(\GoCardlessSDK\GetParams\Institutions $params): \GoCardlessSDK\DTOs\Institution\MultiResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Institutions::class)->get($params);
    }
}
