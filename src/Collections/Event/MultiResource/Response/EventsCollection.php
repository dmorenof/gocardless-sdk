<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\Event\MultiResource\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\GoCardlessSDK\DTOs\Event> */
final class EventsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\Event::class;
}
