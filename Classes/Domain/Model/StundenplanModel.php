<?php

class Tx_Stundenplan_Domain_Model_StundenplanModel {

    protected $_table;

    protected $_basePath = '/../fileadmin/user_upload/plaene/';

    public function get($block, $class) {
        try {
            $handle = fopen(PATH_typo3 . $this->_basePath . $block . '/' . $class, 'r');


            // file holen
            // inhalt lesen
            // inhalt parsen
            return $this->_parseTable();
        } catch (\Exception $e) {
            var_dump($e->getMessage());
            die;
        }
    }

    protected function _parseTable() {
        return array();
    }
}