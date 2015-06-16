<?php

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Tx_Stundenplan_Domain_Model_StundenplanModel as Model;

class Tx_Stundenplan_Controller_StundenplanController extends ActionController {

    protected $_basePath = '/fileadmin/user_upload/plaene/';

    /**
     * Funktion zur Entgegennahme eventueller Post Paramter und Ausgabe der verfügbaren Blöcke und deren Klassen
     */
    public function listAction() {
        $selectedBlock = t3lib_div::_GP('block');
        $this->view->assign('selectedBlock', $selectedBlock);

        if ($selectedBlock) {

            $classes = array_slice(scandir(PATH_site . $this->_basePath . $selectedBlock), 2);

            function shorten(&$value) {
                $value = substr($value, 0, -4);
            }

            array_walk($classes, 'shorten');

            $this->view->assign('classes', $classes);
        }

        $selectedClass = t3lib_div::_GP('class');
        $this->view->assign('selectedClass', $selectedClass);

        if ($selectedClass) {
            $model = new Model();
            $plan = $model->getTable($selectedBlock, $selectedClass);
            $this->view->assign('plan', $plan);
            $this->view->assign('time', $this->_times);
        }

        $blocks = array_slice(scandir(PATH_site . $this->_basePath), 2);
        $this->view->assign('blocks', $blocks);

    }
}