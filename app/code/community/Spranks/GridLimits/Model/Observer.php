<?php
class Spranks_GridLimits_Model_Observer
{

    /**
     * Sets the default grid limits to the specified values.
     *
     * @param Varien_Event_Observer $observer
     * @event core_block_abstract_prepare_layout_before
     * @return void
     */
    public function coreBlockAbstractPrepareLayoutBefore(Varien_Event_Observer $observer)
    {
        $block = $observer->getEvent()->getBlock();
        if ($block instanceof Mage_Adminhtml_Block_Sales_Order_Grid) {
            $block->setDefaultLimit(Mage::getStoreConfig('admin/gridlimits/sales_order_grid'));
        } else if ($block instanceof Mage_Adminhtml_Block_Sales_Invoice_Grid) {
            $block->setDefaultLimit(Mage::getStoreConfig('admin/gridlimits/sales_invoice_grid'));
        } else if ($block instanceof Mage_Adminhtml_Block_Sales_Shipment_Grid) {
            $block->setDefaultLimit(Mage::getStoreConfig('admin/gridlimits/sales_shipment_grid'));
        } else if ($block instanceof Mage_Adminhtml_Block_Sales_Creditmemo_Grid) {
            $block->setDefaultLimit(Mage::getStoreConfig('admin/gridlimits/sales_creditmemo_grid'));
        } else if ($block instanceof Mage_Adminhtml_Block_Catalog_Product_Grid) {
            $block->setDefaultLimit(Mage::getStoreConfig('admin/gridlimits/catalog_product_grid'));
        } else if ($block instanceof Mage_Adminhtml_Block_Catalog_Product_Attribute_Grid) {
            $block->setDefaultLimit(Mage::getStoreConfig('admin/gridlimits/catalog_attribute_grid'));
        } else if ($block instanceof Mage_Adminhtml_Block_Customer_Grid) {
            $block->setDefaultLimit(Mage::getStoreConfig('admin/gridlimits/customers_customer_grid'));
        }
    }

}
