<?php

$installer = $this;
$setup = new Mage_Eav_Model_Entity_Setup('core_setup');
$installer->startSetup();

$setup->addAttribute('catalog_product', 'rating_category', array(
    'group' => 'General',
    'label' => 'Rating Category',
    'type' => 'varchar',
    'input' => 'select',
    'backend' => '',
    'frontend' => '',
    'source' => 'eav/entity_attribute_source_table',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'visible' => true,
    'required' => true,
    'user_defined' => true,
    'searchable' => false,
    'filterable' => false,
    'comparable' => false,
    'visible_on_front' => false,
    'visible_in_advanced_search' => false,
    'is_html_allowed_on_front' => 1,
    'unique' => false,
    'apply_to' => 'simple,grouped,configurable,virtual,bundle,downloadable',
    'option' => array(
        'value' => array(
            0 => array(0 => 'Default', 1 => '60000'),
           
        )
        
    ),
));


$attributeCode = 'rating_category';

$attributeModel = Mage::getModel('catalog/resource_eav_attribute')->loadByCode('catalog_product', $attributeCode);
$attributeId = $attributeModel->getAttributeId();

$option['attribute_id'] = $attributeId; 
$option['value']['New'][0] = 'New';
$option['value']['New'][1] = '10000';
$installer->addAttributeOption($option);

$option1['attribute_id'] = $attributeId; 
$option1['value']['Best'][0] = 'Best';
$option1['value']['Best'][1] = '20000';
$installer->addAttributeOption($option1);

$option2['attribute_id'] = $attributeId; 
$option2['value']['Better'][0] = 'Better';
$option2['value']['Better'][1] = '30000';
$installer->addAttributeOption($option2);

$option3['attribute_id'] = $attributeId; 
$option3['value']['Good'][0] = 'Good';
$option3['value']['Good'][1] = '40000';
$installer->addAttributeOption($option3);

$installer->endSetup();