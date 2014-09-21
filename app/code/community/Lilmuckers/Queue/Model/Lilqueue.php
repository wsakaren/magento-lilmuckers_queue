<?php



class Lilmuckers_Queue_Model_Lilqueue extends Mage_Core_Model_Abstract {


    public function getCode($type, $code='')
    {
        $codes = array(
            'adaptor'=>array(
                'beanstalkd'=>'Beanstalkd',
                'amazonsqs'=>'Amazon SQS',
                'gearman'=>'Gearman',
            ),
        );

        if (!isset($codes[$type])) {
            return false;
        } elseif (''===$code) {
            return $codes[$type];
        }

        if (!isset($codes[$type][$code])) {
            return false;
        } else {
            return $codes[$type][$code];
        }
    }


}
