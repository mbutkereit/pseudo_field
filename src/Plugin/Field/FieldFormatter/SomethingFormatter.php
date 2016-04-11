<?php

/**
 * @file
 * Contains Drupal\pseudo_field\Plugin\Field\FieldFormatter\SomethingFormatter.
 */

namespace Drupal\pseudo_field\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;


/**
 * Plugin implementation of the 'something_formatter' formatter.
 *
 * @FieldFormatter(
 *   id = "something_formatter",
 *   label = @Translation("Other formatter"),
 *   field_types = {
 *     "pseudo"
 *   }
 * )
 */
class SomethingFormatter extends FormatterBase{

  public function viewElements(FieldItemListInterface $items, $langcode) {
    return ['#markup'=> 'AHHHHH'];
  }
}
