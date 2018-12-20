<?php

declare(strict_types=1);

/*
 * This file is part of Sulu.
 *
 * (c) Sulu GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sulu\Bundle\ContentBundle\Model\Content;

use Sulu\Bundle\ContentBundle\Model\Dimension\DimensionInterface;

interface ContentRepositoryInterface
{
    public function findOrCreate(
        string $resourceKey,
        string $resourceId,
        DimensionInterface $dimension
    ): ContentInterface;

    public function findByResource(
        string $resourceKey,
        string $resourceId,
        DimensionInterface $dimension
    ): ?ContentInterface;

    /**
     * @param DimensionInterface[] $dimensions
     */
    public function findByDimensions(string $resourceKey, string $resourceId, array $dimensions): array;
}