<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Event;

/**
 * EventMetadata
 *
 * The metadata that was passed when making the API request that triggered the event
 * (for instance, cancelling a mandate).
 *
 * This field will only be populated if the `details[origin]` field is `api` otherwise it will be an empty object.
 *
 */
final class Metadata extends \Dmorenof\SdkRuntime\DTO
{
}
