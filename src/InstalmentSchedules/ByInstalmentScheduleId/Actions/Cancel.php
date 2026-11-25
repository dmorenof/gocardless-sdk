<?php

declare(strict_types=1);

namespace GoCardlessSDK\InstalmentSchedules\ByInstalmentScheduleId\Actions;

final class Cancel extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /instalment_schedules/{instalment_schedule_id}/actions/cancel [operationId: cancel_instalment_schedule] */
    /**
     * Cancel an instalment schedule
     *
     * Immediately cancels an instalment schedule; no further payments will be collected for it.
     *
     * This will fail with a `cancellation_failed` error if the instalment schedule is already cancelled or has completed.
     */
    public static function post(string $instalment_schedule_id, \GoCardlessSDK\PostParams\InstalmentSchedules\ByInstalmentScheduleId\Actions\Cancel $params): \GoCardlessSDK\DTOs\InstalmentSchedule\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\InstalmentSchedules\ByInstalmentScheduleId\Actions\Cancel::class)->post($instalment_schedule_id, $params);
    }
}
