<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest\ActionsItem;

/**
 * Describes the behaviour of bank authorisations, for the bank_authorisation action
 */
final class BankAuthorisationDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Which authorisation adapter will be used to power these authorisations (GoCardless internal use only)
     */
    public \GoCardlessSDK\Enums\BillingRequest\ActionsItem\BankAuthorisation\AdapterEnum $adapter;
    /**
     * What type of bank authorisations are supported on this billing request
     */
    public \GoCardlessSDK\Enums\BillingRequest\ActionsItem\BankAuthorisation\AuthorisationTypeEnum $authorisation_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'adapter' => is_string($value) ? $this->adapter = \GoCardlessSDK\Enums\BillingRequest\ActionsItem\BankAuthorisation\AdapterEnum::from($value) : parent::assignMember($name, $value),
            'authorisation_type' => is_string($value) ? $this->authorisation_type = \GoCardlessSDK\Enums\BillingRequest\ActionsItem\BankAuthorisation\AuthorisationTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
