<?php

class Imaginaerum_Extralib_Model_Facebook {

    public function getFacebook(array $config = array()) {
        $fb = new \Facebook\Facebook($config);
        return $fb;
    }

}
