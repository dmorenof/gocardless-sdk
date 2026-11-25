<?php

declare(strict_types=1);

namespace GoCardlessSDK\InstalmentSchedules;

final class CreateWithDates extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /instalment_schedules/create_with_dates [operationId: create_with_dates_instalment_schedules] */
    /**
     * Create (with dates)
     *
     * Creates a new instalment schedule object, along with the associated payments. This
     * API is recommended if you know the specific dates you wish to charge. Otherwise,
     * please check out the [scheduling version](https://docs.gocardless.com/docs/api-reference/instalment-schedule#create-with-schedule).
     *
     * The `instalments` property is an array of payment properties (`amount` and
     * `charge_date`).
     *
     * It can take quite a while to create the associated payments, so the API will return
     * the status as `pending` initially. When processing has completed, a subsequent GET
     * request for the instalment schedule will either have the status `success` and link
     * to the created payments, or the status `error` and detailed information about the
     * failures.
     */
    public static function post(\GoCardlessSDK\PostParams\InstalmentSchedules\CreateWithDates $params): \GoCardlessSDK\DTOs\InstalmentSchedule\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\InstalmentSchedules\CreateWithDates::class)->post($params);
    }
}
