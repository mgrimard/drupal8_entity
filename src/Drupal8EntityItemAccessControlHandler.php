<?php

/**
 * @file
 * Contains \Drupal\drupal8_entity\Drupal8EntityItemAccessControlHandler.
 */

namespace Drupal\drupal8_entity;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Drupal8 Entity Item entity.
 *
 * @see \Drupal\drupal8_entity\Entity\Drupal8EntityItem.
 */
class Drupal8EntityItemAccessControlHandler extends EntityAccessControlHandler {
  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {

    switch ($operation) {
      case 'view':
        return AccessResult::allowedIfHasPermission($account, 'view drupal8 entity item entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit drupal8 entity item entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete drupal8 entity item entities');
    }

    return AccessResult::allowed();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add drupal8 entity item entities');
  }

}
