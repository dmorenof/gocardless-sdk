<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources\InstalmentSchedules;

final class CreateWithSchedule extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/instalment_schedules/create_with_schedule',
        'security' => [
            [
                'bearerAuth' => [],
            ],
        ],
        'success' => [
            201,
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
            'type' => '\\GoCardlessSDK\\Requests\\InstalmentSchedules\\CreateWithSchedule\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create (with schedule)
     *
     * Creates a new instalment schedule object, along with the associated payments. This
     * API is recommended if you wish to use the GoCardless scheduling logic. For finer
     * control over the individual dates, please check out the [alternative
     * version](https://docs.gocardless.com/docs/api-reference/instalment-schedule#create-with-schedule).
     *
     * It can take quite a while to create the associated payments, so the API will return
     * the status as `pending` initially. When processing has completed, a subsequent
     * GET request for the instalment schedule will either have the status `success` and link to
     * the created payments, or the status `error` and detailed information about the
     * failures.
     */
    public function post(\GoCardlessSDK\PostParams\InstalmentSchedules\CreateWithSchedule $params): \GoCardlessSDK\DTOs\InstalmentSchedule\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\InstalmentSchedule\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

}
