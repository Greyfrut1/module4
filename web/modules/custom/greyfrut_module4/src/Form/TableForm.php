<?php

namespace Drupal\greyfrut_module4\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Datetime\DrupalDateTime;

class TableForm extends FormBase {

public function getFormId() {
return 'greyfrut_module4_form';
}

public function buildForm(array $form, FormStateInterface $form_state) {



// Додавання полів для введення даних в кожному місяці.
$currentYear = (new DrupalDateTime())->format('Y');
$form['row']['year'] = [
  '#markup' => $currentYear
];

for ($month = 1; $month <= 12; $month++) {
$form['row'][$month] = [
'#type' => 'number',
'#title' => '',
'#default_value' => '',
  '#attributes' => [
    'class' => ['table-month-field'],
  ],
];
}


$form['actions']['submit'] = [
'#type' => 'submit',
'#value' => t('Submit'),
];
$form = [
  '#theme' => 'form_table',
  '#form' => $form
];

return $form;
}

public function validateForm(array &$form, FormStateInterface $form_state) {
// Ваші валідації можуть бути додані тут, якщо потрібно.
}

public function submitForm(array &$form, FormStateInterface $form_state) {
// Обробка введених даних при подачі форми.
}
}
