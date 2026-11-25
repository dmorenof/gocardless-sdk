<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources;

final class MandateImports extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/mandate_imports',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\Mandate\\ImportSingleResource\\Response',
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\MandateImports\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create a new mandate import
     *
     * Mandate imports are first created, before mandates are added one-at-a-time, so
     * this endpoint merely signals the start of the import process. Once you've finished
     * adding entries to an import, you should
     * [submit](https://docs.gocardless.com/docs/api-reference/mandate-import#submit-a-mandate-import) it.
     */
    public function post(\GoCardlessSDK\PostParams\MandateImports $params): \GoCardlessSDK\DTOs\Mandate\ImportSingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Mandate\ImportSingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array GET_BY_MANDATE_IMPORT_ID = [
        'method' => 'GET',
        'path' => '/mandate_imports/{mandate_import_id}',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\Mandate\\ImportSingleResource\\Response',
    ];

    /**
     * Get a mandate import
     *
     * Returns a single mandate import.
     */
    public function getByMandateImportId(string $mandate_import_id, \GoCardlessSDK\GetParams\MandateImports\ByMandateImportId $params): \GoCardlessSDK\DTOs\Mandate\ImportSingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Mandate\ImportSingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_MANDATE_IMPORT_ID), path: ['mandate_import_id' => $mandate_import_id], parameters: $params);
        return $result;
    }
}
