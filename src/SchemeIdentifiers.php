<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class SchemeIdentifiers extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /scheme_identifiers [operationId: list_scheme_identifier] */
    /**
     * List scheme identifiers
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of your scheme identifiers.
     */
    public static function get(\GoCardlessSDK\GetParams\SchemeIdentifiers $params): \GoCardlessSDK\DTOs\SchemeIdentifier\MultiResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\SchemeIdentifiers::class)->get($params);
    }

    /** POST /scheme_identifiers [operationId: create_scheme_identifier] */
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
    public static function post(\GoCardlessSDK\PostParams\SchemeIdentifiers $params): \GoCardlessSDK\DTOs\SchemeIdentifier\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\SchemeIdentifiers::class)->post($params);
    }

    /** GET /scheme_identifiers/{scheme_identifier_id} [operationId: get_scheme_identifiers] */
    /**
     * Get a single scheme identifier
     *
     * Retrieves the details of an existing scheme identifier.
     */
    public static function getBySchemeIdentifierId(string $scheme_identifier_id, \GoCardlessSDK\GetParams\SchemeIdentifiers\BySchemeIdentifierId $params): \GoCardlessSDK\DTOs\SchemeIdentifier\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\SchemeIdentifiers::class)->getBySchemeIdentifierId($scheme_identifier_id, $params);
    }
}
