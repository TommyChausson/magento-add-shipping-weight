<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Address
 *
 * @author Tommy Chausson <contact at tommy-chausson.fr>
 */
class TC_Shippingweightfixe_Model_Sales_Quote_Address extends Mage_Sales_Model_Quote_Address {
    public function getWeight() {
        $weight = parent::getWeight();
        return ($weight + Mage::helper("tcshippingweightfixe") -> getAdditionnalWeight());
    }
    
}
