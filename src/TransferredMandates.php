<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class TransferredMandates extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /transferred_mandates/{mandate_id} [operationId: get_transferred_mandates] */
    /**
     * Get updated customer bank details
     *
     * Returns new customer bank details for a mandate that's been recently transferred
     *
     * <p class="restricted-notice"><strong>Restricted</strong>: This endpoint is restricted to organisations with the Transfer Bank Accounts upgrade</p>
     *
     * <p class="notice"><strong>Note</strong>: See our [Security Requirements](https://docs.gocardless.com/docs/api-reference/security-requirements) before using this feature</p>
     */
    public static function getByMandateId(string $mandate_id, \GoCardlessSDK\GetParams\TransferredMandates\ByMandateId $params): \GoCardlessSDK\DTOs\TransferredMandate\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\TransferredMandates::class)->getByMandateId($mandate_id, $params);
    }
}
