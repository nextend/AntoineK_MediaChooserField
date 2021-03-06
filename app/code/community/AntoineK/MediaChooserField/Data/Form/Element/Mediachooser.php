<?php
/**
 * @category    AntoineK
 * @package     AntoineK_MediaChooserField
 * @copyright   Copyright (c) 2013 Antoine Kociuba (http://www.antoinekociuba.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @author      Antoine Kociuba
 */
class AntoineK_MediaChooserField_Data_Form_Element_Mediachooser extends Varien_Data_Form_Element_Text
{

    /**
     * Render media chooser buttons and image preview HTML after the element
     *
     * @return string
     */
    public function getElementHtml()
    {
        Mage::helper('mediachooserfield')->render($this);
        
        return parent::getElementHtml();
    }

}
