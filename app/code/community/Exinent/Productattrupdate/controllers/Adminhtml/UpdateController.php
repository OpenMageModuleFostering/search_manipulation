<?php

class Exinent_Productattrupdate_Adminhtml_UpdateController extends Mage_Adminhtml_Controller_Action {

    public function updateAction() {
        $collection = Mage::getModel('catalog/product')->getCollection();
        foreach ($collection as $products) {
            $product = Mage::getModel('catalog/product')->load($products->getId());
            $attr = Mage::getModel('catalog/resource_eav_attribute')->loadByCode('catalog_product', 'rating_category');
            $color_label = $attr->getSource()->getOptionId("Default");
            if ($product->getProductRating() == null) {
                $product->setRatingCategory($color_label);
                $product->setProductRating('60000');
                $product->save();
            }
        }
    }

}
