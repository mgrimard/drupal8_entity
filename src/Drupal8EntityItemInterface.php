<?php

/**
 * @file
 * Contains \Drupal\drupal8_entity\Drupal8EntityItemInterface.
 */

namespace Drupal\drupal8_entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Drupal8 Entity Item entities.
 *
 * @ingroup drupal8_entity
 */
interface Drupal8EntityItemInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {
  // Add get/set methods for your configuration properties here.

}
