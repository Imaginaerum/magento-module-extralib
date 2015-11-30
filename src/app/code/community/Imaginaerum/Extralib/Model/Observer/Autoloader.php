<?php

class Imaginaerum_Extralib_Model_Observer_Autoloader extends Varien_Event_Observer {

    public function autoloader($event) {
        spl_autoload_register(array($this, 'loadFacebookSdk'), true, true);
    }

    public static function loadFacebookSdk($class) {
        $sdk_dir = Mage::getBaseDir('lib') . DS . 'Imaginaerum' . DS . 'Extralib';
        if (preg_match('#^(Facebook\\\\)\b#', $class)) {
            $phpFile = str_replace('\\', '/', $sdk_dir . DS . $class) . '.php';
            require_once( $phpFile );
        }
    }

}
