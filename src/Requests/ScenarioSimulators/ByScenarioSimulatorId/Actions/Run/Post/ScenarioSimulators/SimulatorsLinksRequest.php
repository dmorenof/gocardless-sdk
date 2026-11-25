<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\ScenarioSimulators\ByScenarioSimulatorId\Actions\Run\Post\ScenarioSimulators;

final class SimulatorsLinksRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'resource',
    ];

    /**
     * ID of the resource to run the simulation against.
     * Must be same type of resource as the simulator that is being run.
     * eg. Payment ID for `payment_failed`, Mandate ID for `mandate_activated` etc
     * Example: "CR123"
     */
    public string $resource;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'resource' => is_string($value) ? $this->resource = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
