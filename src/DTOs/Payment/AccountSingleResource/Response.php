<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Payment\AccountSingleResource;

/**
 * PaymentAccountSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Payment\Account $payment_accounts;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payment_accounts' => $value instanceof \stdClass ? $this->payment_accounts = new \GoCardlessSDK\DTOs\Payment\Account($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
