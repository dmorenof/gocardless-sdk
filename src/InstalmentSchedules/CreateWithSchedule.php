<?php

declare(strict_types=1);

namespace GoCardlessSDK\InstalmentSchedules;

final class CreateWithSchedule extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /instalment_schedules/create_with_schedule [operationId: create_with_schedule_instalment_schedules] */
    /**
     * Create (with schedule)
     *
     * Creates a new instalment schedule object, along with the associated payments. This
     * API is recommended if you wish to use the GoCardless scheduling logic. For finer
     * control over the individual dates, please check out the [alternative
     * version](https://docs.gocardless.com/docs/api-reference/instalment-schedule#create-with-schedule).
     *
     * It can take quite a while to create the associated payments, so the API will return
     * the status as `pending` initially. When processing has completed, a subsequent
     * GET request for the instalment schedule will either have the status `success` and link to
     * the created payments, or the status `error` and detailed information about the
     * failures.
     */
    public static function post(\GoCardlessSDK\PostParams\InstalmentSchedules\CreateWithSchedule $params): \GoCardlessSDK\DTOs\InstalmentSchedule\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\InstalmentSchedules\CreateWithSchedule::class)->post($params);
    }
}
