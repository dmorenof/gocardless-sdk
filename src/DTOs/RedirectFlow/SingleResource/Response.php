<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\RedirectFlow\SingleResource;

/**
 * RedirectFlowSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\RedirectFlow $redirect_flows;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'redirect_flows' => $value instanceof \stdClass ? $this->redirect_flows = new \GoCardlessSDK\DTOs\RedirectFlow($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
