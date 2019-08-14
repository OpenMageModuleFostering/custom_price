<?php
class Custom_Price_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
		$this->loadLayout();     
		$this->renderLayout();
    }
	
	public function cartAction()
    {
		$this->loadLayout();     
		$this->renderLayout();
    }
}