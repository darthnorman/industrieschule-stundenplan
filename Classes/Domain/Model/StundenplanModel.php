<?php

class StundenplanModel {

    protected $_table;

    public function get($block, $class) {
        if ($block == null || $class == null) {
            return false;
        }


        //suche die tabelle im filesystem
        //content in $_table
        //$this->_table = fread();

        return $this->_parseTable();
    }

    protected function _parseTable() {
        //paresen der haesslichen Tables
        /**
        array('stunde' => array('Unterricht Mo-Fr')
         */
        return array();
    }
}