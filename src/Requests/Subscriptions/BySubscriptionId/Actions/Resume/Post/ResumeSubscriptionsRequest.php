<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\Subscriptions\BySubscriptionId\Actions\Resume\Post;

final class ResumeSubscriptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Customer\Metadata $metadata;
}
