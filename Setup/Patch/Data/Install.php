<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Skukla\CustomDemo\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use MagentoEse\DataInstall\Model\Process;

class Install implements DataPatchInterface
{
    /** @var Process  */
    protected $process;

    public function __construct(Process $process)
    {
        $this->process = $process;
    }

    public function apply()
    {
       $this->process->loadFiles(['Skukla_CustomDemo::fixtures/categories.csv',
            'Skukla_CustomDemo::fixtures/stores.csv',
            'Skukla_CustomDemo::fixtures/product_attributes.csv',
            'Skukla_CustomDemo::fixtures/products.csv',
            'Skukla_CustomDemo::fixtures/blocks.csv',
            'Skukla_CustomDemo::fixtures/dynamic_blocks.csv',
            'Skukla_CustomDemo::fixtures/pages.csv',
            'Skukla_CustomDemo::fixtures/config.json',
            'Skukla_CustomDemo::fixtures/config.csv',
            'Skukla_CustomDemo::fixtures/customers.csv']);
    }

    public static function getDependencies()
    {
        return [];
    }

    public function getAliases()
    {
        return [];
    }
}
