<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources;

final class MandateImportEntries extends \GoCardlessSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/mandate_import_entries',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\Mandate\\ImportEntryMultiResource\\Response',
    ];

    /**
     * List all mandate import entries
     *
     * For an existing mandate import, this endpoint lists all of the entries attached.
     *
     * After a mandate import has been submitted, you can use this endpoint to associate records
     * in your system (using the `record_identifier` that you provided when creating the
     * mandate import).
     *
     */
    public function get(\GoCardlessSDK\GetParams\MandateImportEntries $params): \GoCardlessSDK\DTOs\Mandate\ImportEntryMultiResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Mandate\ImportEntryMultiResource\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/mandate_import_entries',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\Mandate\\ImportEntrySingleResource\\Response',
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\MandateImportEntries\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Add a mandate import entry
     *
     * For an existing [mandate import](https://docs.gocardless.com/docs/api-reference/mandate-import), this endpoint can
     * be used to add individual mandates to be imported into GoCardless.
     *
     * You can add no more than 30,000 rows to a single mandate import.
     * If you attempt to go over this limit, the API will return a `record_limit_exceeded` error.
     */
    public function post(\GoCardlessSDK\PostParams\MandateImportEntries $params): \GoCardlessSDK\DTOs\Mandate\ImportEntrySingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Mandate\ImportEntrySingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

}
