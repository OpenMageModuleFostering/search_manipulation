<?php

class Exinent_Productattrupdate_Block_Adminhtml_System_Config_Form_Productattrupdate extends Mage_Adminhtml_Block_System_Config_Form_Field {

    protected function _construct() {
        parent::_construct();
        $this->setTemplate('productattrupdate/system/config/button.phtml');
    }

    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element) {
        return $this->_toHtml();
    }

    public function getAjaxCheckUrl() {
        return Mage::helper('adminhtml')->getUrl('productattrupdate/adminhtml_update/update');
    }

    public function getButtonHtml() {
        $button = $this->getLayout()->createBlock('adminhtml/widget_button')
                ->setData(array(
            'id' => 'productattrupdate_button',
            'label' => $this->helper('adminhtml')->__('Sort Product Index'),
            'onclick' => 'javascript:check(); return false;'
        ));

        return $button->toHtml();
    }

}
