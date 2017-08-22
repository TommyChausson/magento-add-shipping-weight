<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Data
 *
 * @author Tommy Chausson <contact at tommy-chausson.fr>
 */
class TC_Shippingweightfixe_Helper_Data  extends Mage_Core_Helper_Data {
    
    /**
     * Retourne le poids additionnel
     * @return int
     */
    public function getAdditionnalWeight(){
        $return = 0;
        $weight = Mage::getStoreConfig("shipping/tcshippingweightfixe/weight");
        if(trim($weight)){
            $return = trim(str_replace(",","",$weight));
        }
        return $return;
    }
    
   
}
