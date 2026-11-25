<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\Mandates\ByMandateId\Actions\Cancel\Post;

final class CancelMandatesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Customer\Metadata $metadata;
}
