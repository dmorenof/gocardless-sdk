<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Error;

final class ErrorsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'message',
    ];

    public string $field;
    public \GoCardlessSDK\DTOs\Error\ErrorsItem\LinksDTO $links;
    public string $message;
    public \GoCardlessSDK\DTOs\Error\ErrorsItem\MetadataDTO $metadata;
    public string $reason;
    public string $request_pointer;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'field' => is_string($value) ? $this->field = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = $value : parent::assignMember($name, $value),
            'request_pointer' => is_string($value) ? $this->request_pointer = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
