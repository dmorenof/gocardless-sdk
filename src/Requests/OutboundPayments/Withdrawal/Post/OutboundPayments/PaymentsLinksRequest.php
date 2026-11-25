<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\OutboundPayments\Withdrawal\Post\OutboundPayments;

final class PaymentsLinksRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * ID of the creditor who sends the outbound payment.
     * Example: "CR123"
     */
    public string $creditor;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creditor' => is_string($value) ? $this->creditor = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
