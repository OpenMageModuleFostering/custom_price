<?php 
class Custom_Price_Model_Observer
{
    public function modifyPrice(Varien_Event_Observer $obs)
    {
        // Get the quote item
       $item = $obs->getQuoteItem();
        // Ensure we have the parent item, if it has one
      // $item = ( $item->getParentItem() ? $item->getParentItem() : $item );
        // Load the custom price
      //	$_item = $obs->getItem();
      	$_product= Mage::getSingleton('catalog/product')->load($item->getProductId()); 
		$weight= $_product->getResource()->getAttribute('weight')->getFrontend()->getValue($_product);
		//$reg =  $_product->getResource()->getAttribute('price')->getFrontend()->getValue($_product);
		$golden_price = Mage::getStoreConfig('mysection/mygroup/myfield');
		$demo = $weight*$golden_price;
        $price = $demo;
        // Set the custom price
        $item->setCustomPrice($price);
        $item->setOriginalCustomPrice($price);
        // Enable super mode on the product.
        $item->getProduct()->setIsSuperMode(true);
    }

	
}
?>