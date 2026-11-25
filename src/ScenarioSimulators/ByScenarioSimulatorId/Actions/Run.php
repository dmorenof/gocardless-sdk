<?php

declare(strict_types=1);

namespace GoCardlessSDK\ScenarioSimulators\ByScenarioSimulatorId\Actions;

final class Run extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /scenario_simulators/{scenario_simulator_id}/actions/run [operationId: run_scenario_simulator] */
    /**
     * Simulate a scenario
     *
     * Runs the specific scenario simulator against the specific resource
     */
    public static function post(string $scenario_simulator_id, \GoCardlessSDK\PostParams\ScenarioSimulators\ByScenarioSimulatorId\Actions\Run $params): \GoCardlessSDK\DTOs\ScenarioSimulator\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\ScenarioSimulators\ByScenarioSimulatorId\Actions\Run::class)->post($scenario_simulator_id, $params);
    }

}
