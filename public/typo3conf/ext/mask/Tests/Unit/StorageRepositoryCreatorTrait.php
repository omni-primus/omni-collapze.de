<?php

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace MASK\Mask\Tests\Unit;

use MASK\Mask\Definition\TableDefinitionCollection;
use MASK\Mask\Domain\Repository\StorageRepository;
use MASK\Mask\Loader\LoaderInterface;
use MASK\Mask\Tests\Unit\ConfigurationLoader\FakeConfigurationLoader;

trait StorageRepositoryCreatorTrait
{
    protected function createStorageRepository(array $json): StorageRepository
    {
        $loader = $this->createLoader($json);
        $configurationLoader = new FakeConfigurationLoader();

        return new StorageRepository($loader, $loader->load(), $configurationLoader);
    }

    protected function createLoader(array $json): LoaderInterface
    {
        $loader = new class() implements LoaderInterface {
            private TableDefinitionCollection $tableDefinitionCollection;
            public function load(): TableDefinitionCollection
            {
                return $this->tableDefinitionCollection;
            }
            public function write(TableDefinitionCollection $tableDefinitionCollection): void
            {
                $this->tableDefinitionCollection = $tableDefinitionCollection;
            }
        };
        $tableDefinitionCollection = TableDefinitionCollection::createFromArray($json);
        $loader->write($tableDefinitionCollection);
        return $loader;
    }
}
