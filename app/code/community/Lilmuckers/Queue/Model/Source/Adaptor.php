<?php

class Lilmuckers_Queue_Model_Source_Adaptor
{
    public function toOptionArray()
    {
        $adaptor = Mage::getSingleton('lilqueue/Lilqueue');
        $arr = array();
        foreach ($adaptor->getCode('adaptor') as $k=>$v) {
            $arr[] = array('value'=>$k, 'label'=>Mage::helper('usa')->__($v));
        }
        return $arr;
    }
}
