<?php

/**
 * @file
 * Contains Drupal\pseudo_Field\Plugin\Field\FieldType\CustomField.
 */

namespace Drupal\pseudo_field\Plugin\Field\FieldType;

use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\Field\FieldStorageDefinitionInterface;

/**
 * Plugin implementation of the 'custom field' field type.
 *
 * @FieldType(
 *   id = "pseudo",
 *   label = @Translation("Pseudo Field"),
 *   description = @Translation("Simple pseudo field."),
 *   default_widget = "other_widget",
 *   default_formatter = "something_formatter"
 * )
 */
class CustomField  extends FieldItemBase {

  public static function schema(FieldStorageDefinitionInterface $field_definition) {
    return [];
  }

  public static function propertyDefinitions(FieldStorageDefinitionInterface $field_definition) {
    return [];
  }

  public function isEmpty() {
    return FALSE;
  }

}
