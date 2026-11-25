<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources\ScenarioSimulators\ByScenarioSimulatorId\Actions;

final class Run extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/scenario_simulators/{scenario_simulator_id}/actions/run',
        'security' => [
            [
                'bearerAuth' => [],
            ],
        ],
        'errors' => [
            400 => '\\GoCardlessSDK\\Responses\\Errors\\Status400Response',
            401 => '\\GoCardlessSDK\\Responses\\Errors\\Status401Response',
            404 => '\\GoCardlessSDK\\Responses\\Errors\\Status404Response',
            422 => '\\GoCardlessSDK\\Responses\\Errors\\Status422Response',
            500 => '\\GoCardlessSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status400Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status401Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status404Response',
                'schemaNullable' => false,
            ],
            422 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status422Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\GoCardlessSDK\\DTOs\\ScenarioSimulator\\SingleResource\\Response',
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\ScenarioSimulators\\ByScenarioSimulatorId\\Actions\\Run\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Simulate a scenario
     *
     * Runs the specific scenario simulator against the specific resource
     */
    public function post(string $scenario_simulator_id, \GoCardlessSDK\PostParams\ScenarioSimulators\ByScenarioSimulatorId\Actions\Run $params): \GoCardlessSDK\DTOs\ScenarioSimulator\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\ScenarioSimulator\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['scenario_simulator_id' => $scenario_simulator_id], parameters: $params);
        return $result;
    }

}
