<?php

/**
 * @file
 * Contains drupal8_entity_item.page.inc..
 *
 * Page callback for Drupal8 Entity Item entities.
 */

use Drupal\Core\Render\Element;
use Drupal\Core\Link;
use Drupal\Core\Url;

/**
 * Prepares variables for Drupal8 Entity Item templates.
 *
 * Default template: drupal8_entity_item.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_drupal8_entity_item(array &$variables) {
  // Fetch Drupal8EntityItem Entity Object.
  $drupal8_entity_item = $variables['elements']['#drupal8_entity_item'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
