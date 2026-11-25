<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs;

/**
 * Generic error
 */
final class Error extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'errors',
    'message',
    'request_id',
];

    public int $code;
    public string $documentation_url;
    public \GoCardlessSDK\Collections\Error\ErrorsCollection $errors;
    public string $message;
    public string $request_id;
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'code' => is_int($value) ? $this->code = $value : parent::assignMember($name, $value),
            'documentation_url' => is_string($value) ? $this->documentation_url = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'request_id' => is_string($value) ? $this->request_id = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
