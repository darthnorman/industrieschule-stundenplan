<?php

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Tx_Stundenplan_Domain_Model_StundenplanModel as Model;

class Tx_Stundenplan_Controller_StundenplanController extends ActionController {

    protected $_basePath = 'fileadmin/user_upload/plan/';

    /**
     * Funktion zur Entgegennahme eventueller Post Paramter und Ausgabe der verfügbaren Blöcke und deren Klassen
     */
    public function listAction() {

        $user = strtolower($GLOBALS['TSFE']->fe_user->user['username']);

        $selectedBlock = t3lib_div::_GP('block');
        $selectedClass = t3lib_div::_GP('class');
        $this->view->assign('selectedBlock', $selectedBlock);
        $this->view->assign('selectedClass', $selectedClass);

        if ($selectedBlock) {
            $classes = array_slice(scandir(PATH_site . $this->_basePath . $selectedBlock), 2);

            function shorten(&$value) {
                $value = substr($value, 0, -4);
            }

            array_walk($classes, 'shorten');

            $this->view->assign('classes', $classes);

            if (strpos(strtolower($selectedBlock), 'lehrer') !== false) {
                $label = 'Name';
            } elseif (strpos(strtolower($selectedBlock), 'zimmer') !== false) {
                $label = 'Raum';
            } else {
                $label = 'Klasse';
            }

            $this->view->assign('label', $label);
        }

        if ($selectedClass) {
            $model = new Model();
            $plan = $model->getTable($selectedBlock, $selectedClass, $this->_basePath);
            $this->view->assign('plan', $plan);
        }

        $blocks = array_slice(scandir(PATH_site . $this->_basePath), 2);

        if (strpos($user, 'schueler') !== false) {
            foreach ($blocks as $block) {
                if (strpos(strtolower($block), 'block') === false) {
                    $key = array_search($block, $blocks);
                    unset($blocks[$key]);
                }
            }
        }

        $this->view->assign('blocks', $blocks);

    }
}