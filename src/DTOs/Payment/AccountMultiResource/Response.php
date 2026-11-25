<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Payment\AccountMultiResource;

/**
 * PaymentAccountMultiResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Payment\AccountPaginationMeta $meta;
    public \GoCardlessSDK\Collections\Payment\AccountMultiResource\Response\PaymentAccountsCollection $payment_accounts;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'meta' => $value instanceof \stdClass ? $this->meta = new \GoCardlessSDK\DTOs\Payment\AccountPaginationMeta($value) : parent::assignMember($name, $value),
            'payment_accounts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->payment_accounts = new \GoCardlessSDK\Collections\Payment\AccountMultiResource\Response\PaymentAccountsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\Payment\Account::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
