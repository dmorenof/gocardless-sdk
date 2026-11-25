<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\BillingRequests\ByBillingRequestId\Actions\Fulfil\Post;

final class BillingRequestsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Customer\Metadata $metadata;
}
