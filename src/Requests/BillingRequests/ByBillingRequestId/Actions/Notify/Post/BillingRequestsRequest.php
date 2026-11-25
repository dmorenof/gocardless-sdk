<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\BillingRequests\ByBillingRequestId\Actions\Notify\Post;

final class BillingRequestsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'notification_type',
];

    public \GoCardlessSDK\Enums\BillingRequest\NotificationType $notification_type;
    /**
     * URL that the payer can be redirected to after authorising the payment.
     * Example: "https://example.com/callback"
     */
    public string $redirect_uri;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'notification_type' => is_string($value) ? $this->notification_type = \GoCardlessSDK\Enums\BillingRequest\NotificationType::from($value) : parent::assignMember($name, $value),
            'redirect_uri' => is_string($value) ? $this->redirect_uri = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
