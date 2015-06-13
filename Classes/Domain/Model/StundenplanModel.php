<?php

class Tx_Stundenplan_Domain_Model_StundenplanModel {

    protected $_basePath = '/fileadmin/user_upload/plaene/';

    public function get($block, $class) {
        try {
            $handle = fopen(PATH_site . $this->_basePath . $block . '/' . $class . '.txt', 'r');
            $content = array();

            if ($handle) {
                while (($line = fgets($handle))) {
                    $content[] = explode("\t", $line);
                }
                fclose($handle);
            }
        } catch (\Exception $e) {
            var_dump($e->getMessage());
        }

        return $content;
    }
}