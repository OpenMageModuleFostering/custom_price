<?php

class Custom_Price_Model_Mysql4_Price_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('price/price');
    }
}