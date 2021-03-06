<?php
class Quickpay_Payment_Model_Sales_Order_Grid_Fraudprobability extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    public function render(Varien_Object $row)
    {
        $url = Mage::helper("adminhtml")->getUrl("quickpaypayment/order/", array("id" => $row->getId()));
        $image = Mage::helper('quickpaypayment')->getImage($row->getId());

        $content = $this
        ->getLayout()
        ->createBlock('core/template')
        ->setTemplate('quickpaypayment/grid/fraudprobability.phtml')
        ->setInfoUrl($url)
        ->setImage($image)
        ->toHtml();

        return $content;
    }
}