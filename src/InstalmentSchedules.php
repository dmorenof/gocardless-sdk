<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class InstalmentSchedules extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /instalment_schedules [operationId: list_instalment_schedule] */
    /**
     * List instalment schedules
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of your instalment schedules.
     */
    public static function get(\GoCardlessSDK\GetParams\InstalmentSchedules $params): \GoCardlessSDK\DTOs\InstalmentSchedule\MultiResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\InstalmentSchedules::class)->get($params);
    }

    /** GET /instalment_schedules/{instalment_schedule_id} [operationId: get_instalment_schedules] */
    /**
     * Get a single instalment schedule
     *
     * Retrieves the details of an existing instalment schedule.
     */
    public static function getByInstalmentScheduleId(string $instalment_schedule_id, \GoCardlessSDK\GetParams\InstalmentSchedules\ByInstalmentScheduleId $params): \GoCardlessSDK\DTOs\InstalmentSchedule\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\InstalmentSchedules::class)->getByInstalmentScheduleId($instalment_schedule_id, $params);
    }

    /** PUT /instalment_schedules/{instalment_schedule_id} [operationId: update_instalment_schedules] */
    /**
     * Update an instalment schedule
     *
     * Updates an instalment schedule. This accepts only the metadata parameter.
     */
    public static function putByInstalmentScheduleId(string $instalment_schedule_id, \GoCardlessSDK\PutParams\InstalmentSchedules\ByInstalmentScheduleId $params): \GoCardlessSDK\DTOs\InstalmentSchedule\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\InstalmentSchedules::class)->putByInstalmentScheduleId($instalment_schedule_id, $params);
    }
}
