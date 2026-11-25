<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\PayerAuthorisation;

/**
 * PayerAuthorisationIncompleteField
 */
final class IncompleteField extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The root resource.
     */
    public string $field;
    /**
     * A localised error message
     */
    public string $message;
    /**
     * The path to the field e.g. "/payer_authorisations/customer/city"
     */
    public string $request_pointer;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'field' => is_string($value) ? $this->field = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'request_pointer' => is_string($value) ? $this->request_pointer = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
