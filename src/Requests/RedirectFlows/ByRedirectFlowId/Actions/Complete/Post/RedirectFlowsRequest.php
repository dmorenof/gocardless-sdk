<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\RedirectFlows\ByRedirectFlowId\Actions\Complete\Post;

final class RedirectFlowsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'session_token',
    ];

    /**
     * The customer's session ID must be provided when the redirect flow is set up and again when it is completed. This allows integrators to ensure that the user who was originally sent to the GoCardless payment pages is the one who has completed them.
     */
    public string $session_token;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'session_token' => is_string($value) ? $this->session_token = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
