<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\RedirectFlow;

/**
 * RedirectFlowMetadata
 *
 * Key-value store of custom data. Up to 3 keys are permitted, with key names up to 50 characters and values up to 500 characters. _Note:_ This should not be used for storing PII data.
 * Example: {"salesforce_id":"ABCD1234"}
 */
final class Metadata extends \Dmorenof\SdkRuntime\DTO
{
}
