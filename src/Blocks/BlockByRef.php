<?php

declare(strict_types=1);

namespace GoCardlessSDK\Blocks;

final class BlockByRef extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /blocks/block_by_ref [operationId: block_by_ref_blocks] */
    /**
     * Create blocks by reference
     *
     * Creates new blocks for a given reference. By default blocks will be active.
     * Returns 201 if at least one block was created. Returns 200 if there were no new
     * blocks created.
     */
    public static function post(\GoCardlessSDK\PostParams\Blocks\BlockByRef $params): \GoCardlessSDK\DTOs\Block\MultiResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Blocks\BlockByRef::class)->post($params);
    }

}
