<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Export\MultiResource\Response;

final class ExportsDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Fixed [timestamp](https://docs.gocardless.com/docs/api-reference/data-conventions#dates-and-times), recording when this resource was created.
     * Format: date-time
     */
    public string $created_at;
    /**
     * The currency of the export (if applicable)
     */
    public string $currency;
    public \GoCardlessSDK\Enums\Export\ExportType $export_type;
    /**
     * Unique identifier, beginning with "EX".
     */
    public string $id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'export_type' => is_string($value) ? $this->export_type = \GoCardlessSDK\Enums\Export\ExportType::from($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
