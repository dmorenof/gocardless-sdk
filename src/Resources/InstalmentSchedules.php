<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources;

final class InstalmentSchedules extends \GoCardlessSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/instalment_schedules',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\InstalmentSchedule\\MultiResource\\Response',
        'querySerialization' => [
            'created_at' => 'deepObject',
        ],
    ];

    /**
     * List instalment schedules
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of your instalment schedules.
     */
    public function get(\GoCardlessSDK\GetParams\InstalmentSchedules $params): \GoCardlessSDK\DTOs\InstalmentSchedule\MultiResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\InstalmentSchedule\MultiResource\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array GET_BY_INSTALMENT_SCHEDULE_ID = [
        'method' => 'GET',
        'path' => '/instalment_schedules/{instalment_schedule_id}',
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
    ];

    /**
     * Get a single instalment schedule
     *
     * Retrieves the details of an existing instalment schedule.
     */
    public function getByInstalmentScheduleId(string $instalment_schedule_id, \GoCardlessSDK\GetParams\InstalmentSchedules\ByInstalmentScheduleId $params): \GoCardlessSDK\DTOs\InstalmentSchedule\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\InstalmentSchedule\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_INSTALMENT_SCHEDULE_ID), path: ['instalment_schedule_id' => $instalment_schedule_id], parameters: $params);
        return $result;
    }

    private const array PUT_BY_INSTALMENT_SCHEDULE_ID = [
        'method' => 'PUT',
        'path' => '/instalment_schedules/{instalment_schedule_id}',
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
            'type' => '\\GoCardlessSDK\\Requests\\InstalmentSchedules\\ByInstalmentScheduleId\\Put',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update an instalment schedule
     *
     * Updates an instalment schedule. This accepts only the metadata parameter.
     */
    public function putByInstalmentScheduleId(string $instalment_schedule_id, \GoCardlessSDK\PutParams\InstalmentSchedules\ByInstalmentScheduleId $params): \GoCardlessSDK\DTOs\InstalmentSchedule\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\InstalmentSchedule\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::PUT_BY_INSTALMENT_SCHEDULE_ID), path: ['instalment_schedule_id' => $instalment_schedule_id], parameters: $params);
        return $result;
    }

}
