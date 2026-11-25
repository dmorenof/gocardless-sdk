<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\Subscriptions\BySubscriptionId\Actions\Cancel\Post;

final class CancelSubscriptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Customer\Metadata $metadata;
}
