<?php

class Itella_Cod_Model_Order_Total extends Mage_Sales_Model_Order_Invoice_Total_Abstract
{
	public function collect(Mage_Sales_Model_Order_Invoice $invoice)
	{
		$order = $invoice->getOrder();

		$amount = $order->getItellaCodFee();
				
		$invoice->setGrandTotal($invoice->getGrandTotal() + $amount);
		$invoice->setBaseGrandTotal($invoice->getBaseGrandTotal() + $amount);
		
		return $this;
	}
}
