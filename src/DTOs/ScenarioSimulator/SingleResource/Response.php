<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\ScenarioSimulator\SingleResource;

/**
 * ScenarioSimulatorSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\ScenarioSimulator $scenario_simulators;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'scenario_simulators' => $value instanceof \stdClass ? $this->scenario_simulators = new \GoCardlessSDK\DTOs\ScenarioSimulator($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
