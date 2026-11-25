<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\Payments\ByPaymentId\Actions\Cancel\Post;

final class CancelPaymentsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Customer\Metadata $metadata;
}
