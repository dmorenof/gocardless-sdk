<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class Events extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /events [operationId: list_event] */
    /**
     * List events
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of your events.
     * <p class="notice"><strong>Important</strong>: This endpoint will no longer return events older than 18 months, including when filtering by resource. This takes effect no sooner than 1 August 2026 in sandbox environments, and no sooner than 1 October 2026 in live environments.</p>
     */
    public static function get(\GoCardlessSDK\GetParams\Events $params): \GoCardlessSDK\DTOs\Event\MultiResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Events::class)->get($params);
    }

    /** GET /events/{event_id} [operationId: get_events] */
    /**
     * Get a single event
     *
     * Retrieves the details of a single event.
     */
    public static function getByEventId(string $event_id, \GoCardlessSDK\GetParams\Events\ByEventId $params): \GoCardlessSDK\DTOs\Event\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Events::class)->getByEventId($event_id, $params);
    }
}
