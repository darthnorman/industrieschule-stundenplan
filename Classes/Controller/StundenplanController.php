<?php
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class Tx_Stundenplan_Controller_StundenplanController extends ActionController {

    public function listAction($block = null, $class = null) {

        if ($block == null && $class == null) {
            // auswahl von block und klasse
        } else {
            $model = new StundenplanModel();
            $table = $model->get($block, $class);

            if ($table) {
                $this->view->assign('table', $table);
            } else {
                $this->redirect('list', 'Stundenplan', 'stundenplan', array());
            }
        }

    }
}
