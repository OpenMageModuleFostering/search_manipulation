<?php

$installer = $this;
$setup = new Mage_Eav_Model_Entity_Setup('core_setup');
$installer->startSetup();

$setup->addAttribute('catalog_product', 'product_rating', array(
    'group' => 'General', 
    'label' => 'Product Rating',
    'type' => 'int',
    'input' => 'select',
    'backend' => '',
    'frontend' => '',
    //'source' => 'eav/entity_attribute_source_table',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    'visible' => true,
    'required' => false,
    'user_defined' => true,
    'searchable' => false,
    'filterable' => false,
    'comparable' => false,
    'visible_on_front' => false,
    'visible_in_advanced_search' => false,
    'is_html_allowed_on_front' => '0',
    'used_for_sort_by'              => '1',
    'unique' => false,
    'apply_to' => 'simple,grouped,configurable,virtual,bundle,downloadable',
    'option' => array(
        'value' => array(
            0 => array(0 => '60000', 1 => '60000'),
           
        )
        
    ),

));
$installer->endSetup();


