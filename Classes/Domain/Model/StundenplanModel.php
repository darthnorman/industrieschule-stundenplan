<?php

class Tx_Stundenplan_Domain_Model_StundenplanModel {

    protected $_times = array(
        '07:30',
        '-',
        '08:15',
        '08:15',
        '-',
        '09:00',
        '09:30',
        '-',
        '10:15',
        '10:15',
        '-',
        '11:00',
        '11:15',
        '-',
        '12:00',
        '12:00',
        '-',
        '12:45',
        '13:30',
        '-',
        '14:15',
        '14:15',
        '-',
        '15:00',
        '15:15',
        '-',
        '16.00',
        '16:00',
        '-',
        '16:45'
    );

    protected $_basePath = '/fileadmin/user_upload/plaene/';

    public function getTable($block, $class) {
        try {
            $handle = fopen(PATH_site . $this->_basePath . $block . '/' . $class . '.txt', 'r');
            $content = array();

            $i = 0;

            if ($handle) {
                while (($line = fgets($handle))) {
                    $line = explode("\t", $line);
                    $row = array();
                    foreach ($line as $cell) {
                        $row[] = utf8_encode($cell);
                    }
                    array_unshift($row, $this->_times[$i]);
                    $content[] = array_slice($row, 0, 6);
                    $i++;
                }
                fclose($handle);
            }
        } catch (\Exception $e) {
            var_dump($e->getMessage());
        }

        return $content;
    }
}