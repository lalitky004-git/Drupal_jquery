<?php

/**
 * @file
 * Contains \Drupal\custom_lalit_js\Form\ResumeForm.
 */
namespace Drupal\custom_lalit_js\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Messenger\MessengerTrait;
class CustomForm extends FormBase {


  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'custom_lalit_form';
  }


  /**
 * {@inheritdoc}
 */
public function buildForm(array $form, FormStateInterface $form_state) {

  $form['name'] = array (
    '#type' => 'textfield',
    '#title' => t(' name:'),
  );
  $form['number'] = array (
    '#type' => 'number',
    '#title' => t(' number:'),
  );
  $form['city'] = array (
    '#type' => 'textfield',
    '#title' => t(' city:'),
  );
  $form['competency'] = array (
    '#type' => 'textfield',
    '#title' => t(' competency:'),
  );


  $form['actions']['#type'] = 'actions';
  $form['actions']['submit'] = array(
    '#type' => 'submit',
    '#value' => $this->t('Save'),
    '#button_type' => 'primary',
  );


  return $form;
}


  /**
   * {@inheritdoc}
   */
    public function validateForm(array &$form, FormStateInterface $form_state) {

    }


 
/**
  * {@inheritdoc}
  */
 public function submitForm(array &$form, FormStateInterface $form_state) {
 

  }
}