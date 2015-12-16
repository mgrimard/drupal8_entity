<?php

/**
 * @file
 * Contains \Drupal\drupal8_entity\Form\Drupal8EntityItemSettingsForm.
 */

namespace Drupal\drupal8_entity\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class Drupal8EntityItemSettingsForm.
 *
 * @package Drupal\drupal8_entity\Form
 *
 * @ingroup drupal8_entity
 */
class Drupal8EntityItemSettingsForm extends FormBase {
  /**
   * Returns a unique string identifying the form.
   *
   * @return string
   *   The unique string identifying the form.
   */
  public function getFormId() {
    return 'Drupal8EntityItem_settings';
  }

  /**
   * Form submission handler.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Empty implementation of the abstract submit class.
  }


  /**
   * Defines the settings form for Drupal8 Entity Item entities.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return array
   *   Form definition array.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['Drupal8EntityItem_settings']['#markup'] = 'Settings form for Drupal8 Entity Item entities. Manage field settings here.';
    return $form;
  }

}
