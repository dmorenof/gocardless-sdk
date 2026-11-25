<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\BillingRequests\ByBillingRequestId\Actions\ConfirmPayerDetails\Post;

final class BillingRequestsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Customer\Metadata $metadata;
    /**
     * This attribute can be set to true if the payer has indicated that multiple signatures are required for the mandate. As long as every other Billing Request actions have been completed, the payer will receive an email notification containing instructions on how to complete the additional signature. The dual signature flow can only be completed using GoCardless branded pages.
     */
    public bool $payer_requested_dual_signature;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payer_requested_dual_signature' => is_bool($value) ? $this->payer_requested_dual_signature = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
