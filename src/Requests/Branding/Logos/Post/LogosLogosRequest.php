<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\Branding\Logos\Post;

final class LogosLogosRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'image',
];

    /**
     * Base64 encoded string.
     * Example: "data:image/png;base64, <base64 string>"
     */
    public string $image;
    public \GoCardlessSDK\Requests\Branding\Logos\Post\Logos\LogosLinksRequest $links;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'image' => is_string($value) ? $this->image = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
