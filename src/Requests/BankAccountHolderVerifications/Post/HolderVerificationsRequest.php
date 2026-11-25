<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\BankAccountHolderVerifications\Post;

final class HolderVerificationsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'links',
    'type',
];

    public \GoCardlessSDK\Requests\BankAccountHolderVerifications\Post\BankAccountHolderVerifications\VerificationsLinksRequest $links;
    /**
     * An alphanumeric reference code used by some financial institutions to identify an individual account.
     */
    public ?string $reference;
    public \GoCardlessSDK\Enums\Bank\AccountHolderVerificationType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'reference' => $value === null || is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \GoCardlessSDK\Enums\Bank\AccountHolderVerificationType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
