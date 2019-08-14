<?php

$installer = $this;
$setup = new Mage_Eav_Model_Entity_Setup('core_setup');
$installer->startSetup();

$setup->addAttribute('catalog_product', 'rating_priority', array(
    'group' => 'General', 
    'label' => 'Rating priority',
    'type' => 'text',
    'input' => 'text',
    'backend' => '',
    'frontend' => '',
    //'source' => 'eav/entity_attribute_source_table',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'visible' => true,
    'required' => true,
    'user_defined' => true,
    'searchable' => false,
    'filterable' => false,
    'comparable' => false,
    'visible_on_front' => false,
    'visible_in_advanced_search' => false,
    'is_html_allowed_on_front' => '0',
    'unique' => false,
    'used_for_sort_by' => '1',
    'apply_to' => 'simple,grouped,configurable,virtual,bundle,downloadable',
   
  
));
$installer->endSetup();