<?php

namespace Drupal\greyfrut_module4\Controller;

use Drupal\greyfrut_module4\Form\TableForm;
use Drupal\Core\Controller\ControllerBase;

/**
*
*/
class TablesList extends ControllerBase {

/**
*
*/
public function buildTables() {
$form = $this->formBuilder()->getForm(TableForm::class);

return $form;
}

}
