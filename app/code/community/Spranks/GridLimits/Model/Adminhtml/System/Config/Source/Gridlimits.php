<?php

class Spranks_GridLimits_Model_Adminhtml_System_Config_Source_Gridlimits
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 20, 'label' => Mage::helper('adminhtml')->__('20')),
            array('value' => 30, 'label' => Mage::helper('adminhtml')->__('30')),
            array('value' => 50, 'label' => Mage::helper('adminhtml')->__('50')),
            array('value' => 100, 'label' => Mage::helper('adminhtml')->__('100')),
            array('value' => 200, 'label' => Mage::helper('adminhtml')->__('200'))
        );
    }

}
