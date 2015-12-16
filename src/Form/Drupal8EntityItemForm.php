<?php

/**
 * @file
 * Contains \Drupal\drupal8_entity\Entity\Form\Drupal8EntityItemForm.
 */

namespace Drupal\drupal8_entity\Entity\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Language\Language;

/**
 * Form controller for Drupal8 Entity Item edit forms.
 *
 * @ingroup drupal8_entity
 */
class Drupal8EntityItemForm extends ContentEntityForm {
  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    /* @var $entity \Drupal\drupal8_entity\Entity\Drupal8EntityItem */
    $form = parent::buildForm($form, $form_state);
    $entity = $this->entity;

    $form['langcode'] = array(
      '#title' => $this->t('Language'),
      '#type' => 'language_select',
      '#default_value' => $entity->langcode->value,
      '#languages' => Language::STATE_ALL,
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submit(array $form, FormStateInterface $form_state) {
    // Build the entity object from the submitted values.
    $entity = parent::submit($form, $form_state);

    return $entity;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $entity = $this->entity;
    $status = $entity->save();

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Drupal8 Entity Item.', [
          '%label' => $entity->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Drupal8 Entity Item.', [
          '%label' => $entity->label(),
        ]));
    }
    $form_state->setRedirect('entity.drupal8_entity_item.edit_form', ['drupal8_entity_item' => $entity->id()]);
  }

}
