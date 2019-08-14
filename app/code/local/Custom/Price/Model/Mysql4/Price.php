<?php

class Custom_Price_Model_Mysql4_Price extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the price_id refers to the key field in your database table.
        $this->_init('price/price', 'price_id');
    }
}