<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs;

/**
 * Transferred Mandate
 *
 * Mandates that have been transferred using Current Account Switch Service
 */
final class TransferredMandate extends \Dmorenof\SdkRuntime\DTO
{
    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Encrypted customer bank account details, containing:
     * `iban`, `account_holder_name`, `swift_bank_code`, `swift_branch_code`, `swift_account_number`
     */
    public string $encrypted_customer_bank_details;
    /**
     * Random AES-256 key used to encrypt bank account details, itself encrypted with your public key.
     */
    public string $encrypted_decryption_key;
    public \GoCardlessSDK\DTOs\TransferredMandate\Links $links;
    /**
     * The ID of an RSA-2048 public key, from your JWKS, used to encrypt the AES key.
     */
    public string $public_key_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'encrypted_customer_bank_details' => is_string($value) ? $this->encrypted_customer_bank_details = $value : parent::assignMember($name, $value),
            'encrypted_decryption_key' => is_string($value) ? $this->encrypted_decryption_key = $value : parent::assignMember($name, $value),
            'links' => $value instanceof \stdClass ? $this->links = new \GoCardlessSDK\DTOs\TransferredMandate\Links($value) : parent::assignMember($name, $value),
            'public_key_id' => is_string($value) ? $this->public_key_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
