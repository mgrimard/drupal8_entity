<?php

/**
 * @file
 * Contains \Drupal\drupal8_entity\Drupal8EntityItemListBuilder.
 */

namespace Drupal\drupal8_entity;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Routing\LinkGeneratorTrait;
use Drupal\Core\Url;

/**
 * Defines a class to build a listing of Drupal8 Entity Item entities.
 *
 * @ingroup drupal8_entity
 */
class Drupal8EntityItemListBuilder extends EntityListBuilder {
  use LinkGeneratorTrait;
  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Drupal8 Entity Item ID');
    $header['name'] = $this->t('Name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\drupal8_entity\Entity\Drupal8EntityItem */
    $row['id'] = $entity->id();
    $row['name'] = $this->l(
      $entity->label(),
      new Url(
        'entity.drupal8_entity_item.edit_form', array(
          'drupal8_entity_item' => $entity->id(),
        )
      )
    );
    return $row + parent::buildRow($entity);
  }

}
