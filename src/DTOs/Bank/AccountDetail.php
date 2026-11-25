<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Bank;

/**
 * Bank Account Details
 *
 * Retrieve bank account details in JWE encrypted format
 */
final class AccountDetail extends \Dmorenof\SdkRuntime\DTO
{
    protected const array PROPERTY_MAP = [
        'protected' => 'protected_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'protected_' => 'protected',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Base64 URL encoded encrypted payload, in this case bank details.
     */
    public string $ciphertext;
    /**
     * Base64 URL encoded symmetric content encryption key, encrypted with the asymmetric key from your JWKS.
     */
    public string $encrypted_key;
    /**
     * Base64 URL encoded initialization vector, used during content encryption.
     */
    public string $iv;
    /**
     * Base64 URL encoded JWE header values, containing the following keys:
     *
     *   - `alg`: the asymmetric encryption type used to encrypt symmetric key, e.g: `RSA-OAEP`.
     *   - `enc`: the content encryption type, e.g: `A256GCM`.
     *   - `kid`: the ID of an RSA-2048 public key, from your JWKS, used to encrypt the AES key.
     */
    public string $protected_;
    /**
     * Base64 URL encoded authentication tag, used to verify payload integrity during decryption.
     */
    public string $tag;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ciphertext' => is_string($value) ? $this->ciphertext = $value : parent::assignMember($name, $value),
            'encrypted_key' => is_string($value) ? $this->encrypted_key = $value : parent::assignMember($name, $value),
            'iv' => is_string($value) ? $this->iv = $value : parent::assignMember($name, $value),
            'protected' => is_string($value) ? $this->protected_ = $value : parent::assignMember($name, $value),
            'tag' => is_string($value) ? $this->tag = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
