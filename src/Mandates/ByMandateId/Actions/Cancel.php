<?php

declare(strict_types=1);

namespace GoCardlessSDK\Mandates\ByMandateId\Actions;

final class Cancel extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /mandates/{mandate_id}/actions/cancel [operationId: cancel_mandate] */
    /**
     * Cancel a mandate
     *
     * Immediately cancels a mandate and all associated cancellable payments. Any metadata supplied to this endpoint will be stored on the mandate cancellation event it causes.
     *
     * This will fail with a `cancellation_failed` error if the mandate is already cancelled.
     */
    public static function post(string $mandate_id, \GoCardlessSDK\PostParams\Mandates\ByMandateId\Actions\Cancel $params): \GoCardlessSDK\DTOs\Mandate\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Mandates\ByMandateId\Actions\Cancel::class)->post($mandate_id, $params);
    }

}
