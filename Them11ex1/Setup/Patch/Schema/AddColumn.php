<?php
namespace Perspective\Them11ex1\Setup\Patch\Schema;

use Magento\Framework\DB\Ddl\Table;

use Magento\Framework\Setup\Patch\SchemaPatchInterface;

use Magento\Framework\Setup\ModuleDataSetupInterface;

class AddColumn implements SchemaPatchInterface
{
    private $moduleDataSetup;

    public function __construct(
 
        ModuleDataSetupInterface $moduleDataSetup
 
    ) {
 
        $this->moduleDataSetup = $moduleDataSetup;
 
    }
 
 
 
    public static function getDependencies()
 
    {
 
        return [];
 
    }
 
 
 
    public function getAliases()
 
    {
 
        return [];
 
    }
 
 
 
    public function apply()
 
    {
 
        $this->moduleDataSetup->startSetup();
 
 
 
        $this->moduleDataSetup->getConnection()->addColumn(
 
            $this->moduleDataSetup->getTable('consultations'),
 
            'group',
 
            [
 
                'type' => Table::TYPE_TEXT,
 
                'nullable' => false,
 
                'comment'  => 'Customer Group',
 
            ]
 
        );
 
 
 
        $this->moduleDataSetup->endSetup();
 
    }
 
 }
 