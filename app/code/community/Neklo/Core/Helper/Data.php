<?php

class Neklo_Core_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function __()
    {
        $args = func_get_args();
        if ($args[0] == '[NEKLO]') {
            return '<img src="' . $this->_getLogoUrl() . '" height="11" alt="Neklo" title="" />';
        }
        $expr = new Mage_Core_Model_Translate_Expr(array_shift($args), $this->_getModuleName());
        array_unshift($args, $expr);
        return Mage::app()->getTranslator()->translate($args);
    }

    protected function _getLogoUrl()
    {
        return $this->_getRequest()->getPost('neklo_cache') . 'neklo.png';
    }
}