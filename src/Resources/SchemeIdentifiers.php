<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources;

final class SchemeIdentifiers extends \GoCardlessSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/scheme_identifiers',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\SchemeIdentifier\\MultiResource\\Response',
    ];

    /**
     * List scheme identifiers
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of your scheme identifiers.
     */
    public function get(\GoCardlessSDK\GetParams\SchemeIdentifiers $params): \GoCardlessSDK\DTOs\SchemeIdentifier\MultiResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\SchemeIdentifier\MultiResource\Response $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/scheme_identifiers',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\SchemeIdentifier\\SingleResource\\Response',
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\SchemeIdentifiers\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create a scheme identifier
     *
     * Creates a new scheme identifier. The scheme identifier status will be `pending` while GoCardless is
     * processing the request. Once the scheme identifier is ready to be used the status will be updated to `active`.
     * At this point, GoCardless will emit a scheme identifier activated event via webhook to notify you of this change.
     * In Bacs, it will take up to five working days for a scheme identifier to become active. On other schemes, including SEPA,
     * this happens instantly.
     *
     * #### Scheme identifier name validations
     *
     * The `name` field of a scheme identifier can contain alphanumeric characters, spaces and
     * special characters.
     *
     * Its maximum length and the special characters it supports depend on the scheme:
     *
     * | __scheme__        | __maximum length__ | __special characters allowed__                      |
     * | :---------------- | :----------------- | :-------------------------------------------------- |
     * | `bacs`            | 18 characters      | `/` `.` `&` `-`                                     |
     * | `sepa`            | 70 characters      | `/` `?` `:` `(` `)` `.` `,` `+` `&` `<` `>` `'` `"` |
     * | `ach`             | 16 characters      | `/` `?` `:` `(` `)` `.` `,` `'` `+` `-`             |
     * | `faster_payments` | 18 characters      | `/` `?` `:` `(` `)` `.` `,` `'` `+` `-`             |
     *
     * The validation error that gets returned for an invalid name will contain a suggested name
     * in the metadata that is guaranteed to pass name validations.
     *
     * You should ensure that the name you set matches the legal name or the trading name of
     * the creditor, otherwise, there is an increased risk of chargeback.
     *
     *
     * <p class="restricted-notice"><strong>Restricted</strong>: This endpoint is restricted to GoCardless Embed customers. Please email [embed-commercial-team&#64;gocardless.com](mailto:embed-commercial-team&#64;gocardless.com) if you are interested in using this product.</p>
     */
    public function post(\GoCardlessSDK\PostParams\SchemeIdentifiers $params): \GoCardlessSDK\DTOs\SchemeIdentifier\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\SchemeIdentifier\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array GET_BY_SCHEME_IDENTIFIER_ID = [
        'method' => 'GET',
        'path' => '/scheme_identifiers/{scheme_identifier_id}',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\SchemeIdentifier\\SingleResource\\Response',
    ];

    /**
     * Get a single scheme identifier
     *
     * Retrieves the details of an existing scheme identifier.
     */
    public function getBySchemeIdentifierId(string $scheme_identifier_id, \GoCardlessSDK\GetParams\SchemeIdentifiers\BySchemeIdentifierId $params): \GoCardlessSDK\DTOs\SchemeIdentifier\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\SchemeIdentifier\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_SCHEME_IDENTIFIER_ID), path: ['scheme_identifier_id' => $scheme_identifier_id], parameters: $params);
        return $result;
    }

}
