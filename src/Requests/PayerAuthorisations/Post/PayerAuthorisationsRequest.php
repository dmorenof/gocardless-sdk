<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\PayerAuthorisations\Post;

final class PayerAuthorisationsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'bank_account',
    'customer',
    'mandate',
];

    public \GoCardlessSDK\DTOs\PayerAuthorisation\BankAccount $bank_account;
    public \GoCardlessSDK\DTOs\PayerAuthorisation\Customer $customer;
    public \GoCardlessSDK\DTOs\PayerAuthorisation\Mandate $mandate;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank_account' => $value instanceof \stdClass ? $this->bank_account = new \GoCardlessSDK\DTOs\PayerAuthorisation\BankAccount($value) : parent::assignMember($name, $value),
            'customer' => $value instanceof \stdClass ? $this->customer = new \GoCardlessSDK\DTOs\PayerAuthorisation\Customer($value) : parent::assignMember($name, $value),
            'mandate' => $value instanceof \stdClass ? $this->mandate = new \GoCardlessSDK\DTOs\PayerAuthorisation\Mandate($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
