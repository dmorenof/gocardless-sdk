<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class Blocks extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /blocks [operationId: list_block] */
    /**
     * List multiple blocks
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of your blocks.
     */
    public static function get(\GoCardlessSDK\GetParams\Blocks $params): \GoCardlessSDK\DTOs\Block\MultiResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Blocks::class)->get($params);
    }

    /** POST /blocks [operationId: create_block] */
    /**
     * Create a block
     *
     * Creates a new Block of a given type. By default it will be active.
     *
     * <p class="notice"><strong>Note</strong>: Block will be enabled if you try to create a block that already exists and is disabled.</p>
     */
    public static function post(\GoCardlessSDK\PostParams\Blocks $params): \GoCardlessSDK\DTOs\Block\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Blocks::class)->post($params);
    }

    /** GET /blocks/{block_id} [operationId: get_blocks] */
    /**
     * Get a single block
     *
     * Retrieves the details of an existing block.
     */
    public static function getByBlockId(string $block_id, \GoCardlessSDK\GetParams\Blocks\ByBlockId $params): \GoCardlessSDK\DTOs\Block\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Blocks::class)->getByBlockId($block_id, $params);
    }

}
