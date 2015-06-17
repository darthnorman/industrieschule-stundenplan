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

    /**
     * liefert für die angegebene Kombination aus Klasse und Block den Stundenplan in einem Array
     *
     * @param string $block
     * @param string $class
     * @param string $basePath
     * @return array
     */
    public function getTable($block, $class, $basePath) {
        try {
            $handle = fopen(PATH_site . $basePath . $block . '/' . $class . '.TXT', 'r');
            if (!$handle) {
                $handle = fopen(PATH_site . $basePath . $block . '/' . $class . '.txt', 'r');
            }
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
            echo $e->getMessage();
        }

        return $content;
    }
}