<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\Webhook\MultiResource\Response;

final class WebhooksCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\Webhook::class;
}
