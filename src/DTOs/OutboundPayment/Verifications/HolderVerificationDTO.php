<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\OutboundPayment\Verifications;

/**
 * Checks if the recipient owns the provided bank account
 */
final class HolderVerificationDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The actual account name returned by the recipient's bank, populated only in the case of a partial match.
     * Example: "Jo Doe"
     */
    public ?string $actual_account_name;
    /**
     * Result of the verification, could be one of
     *
     * - `full_match`: The verification has confirmed that the account name exactly matches the details provided.
     * - `partial_match`: The verification has confirmed that the account name is similar but does not match to the details provided.
     * - `no_match`: The verification concludes the provided name does not match the account details.
     * - `unable_to_match`: The verification could not be performed due to recipient bank issues or technical issues
     * Example: "partial_match"
     */
    public \GoCardlessSDK\Enums\OutboundPayment\Verifications\RecipientBankAccountHolderVerification\ResultEnum $result;
    /**
     * Type of the verification that has been performed
     * eg. [Confirmation of Payee](https://www.wearepay.uk/what-we-do/overlay-services/confirmation-of-payee/)
     * Example: "confirmation_of_payee"
     */
    public \GoCardlessSDK\Enums\OutboundPayment\Verifications\RecipientBankAccountHolderVerification\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'actual_account_name' => $value === null || is_string($value) ? $this->actual_account_name = $value : parent::assignMember($name, $value),
            'result' => is_string($value) ? $this->result = \GoCardlessSDK\Enums\OutboundPayment\Verifications\RecipientBankAccountHolderVerification\ResultEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \GoCardlessSDK\Enums\OutboundPayment\Verifications\RecipientBankAccountHolderVerification\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
