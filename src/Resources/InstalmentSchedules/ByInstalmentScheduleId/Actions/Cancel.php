<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources\InstalmentSchedules\ByInstalmentScheduleId\Actions;

final class Cancel extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/instalment_schedules/{instalment_schedule_id}/actions/cancel',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\InstalmentSchedule\\SingleResource\\Response',
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\InstalmentSchedules\\ByInstalmentScheduleId\\Actions\\Cancel\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Cancel an instalment schedule
     *
     * Immediately cancels an instalment schedule; no further payments will be collected for it.
     *
     * This will fail with a `cancellation_failed` error if the instalment schedule is already cancelled or has completed.
     */
    public function post(string $instalment_schedule_id, \GoCardlessSDK\PostParams\InstalmentSchedules\ByInstalmentScheduleId\Actions\Cancel $params): \GoCardlessSDK\DTOs\InstalmentSchedule\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\InstalmentSchedule\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['instalment_schedule_id' => $instalment_schedule_id], parameters: $params);
        return $result;
    }

}
