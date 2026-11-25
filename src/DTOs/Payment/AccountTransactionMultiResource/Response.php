<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Payment\AccountTransactionMultiResource;

/**
 * PaymentAccountTransactionMultiResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Payment\AccountTransactionPaginationMeta $meta;
    public \GoCardlessSDK\Collections\Event\Linked\AccountTransactionsCollection $payment_account_transactions;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'meta' => $value instanceof \stdClass ? $this->meta = new \GoCardlessSDK\DTOs\Payment\AccountTransactionPaginationMeta($value) : parent::assignMember($name, $value),
            'payment_account_transactions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->payment_account_transactions = new \GoCardlessSDK\Collections\Event\Linked\AccountTransactionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\Payment\AccountTransaction::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
