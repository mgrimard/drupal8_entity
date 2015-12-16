<?php

/**
 * @file
 * Contains \Drupal\drupal8_entity\Entity\Drupal8EntityItem.
 */

namespace Drupal\drupal8_entity\Entity;

use Drupal\views\EntityViewsData;
use Drupal\views\EntityViewsDataInterface;

/**
 * Provides Views data for Drupal8 Entity Item entities.
 */
class Drupal8EntityItemViewsData extends EntityViewsData implements EntityViewsDataInterface {
  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    $data['drupal8_entity_item']['table']['base'] = array(
      'field' => 'id',
      'title' => $this->t('Drupal8 Entity Item'),
      'help' => $this->t('The Drupal8 Entity Item ID.'),
    );

    return $data;
  }

}
