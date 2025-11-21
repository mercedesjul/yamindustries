<?php

/**
 * @var ContentWrapper $wrapper
 */

use Drupal\zero_entitywrapper\Content\ContentWrapper;

$vars['headline'] = $wrapper->getValue('field_title');
$vars['subline'] = $wrapper->getMarkup('field_body');
$vars['image'] = $wrapper->display()->responsiveImage('field_image', 0, 'full_width');

foreach ($wrapper->getEntities('field_facts') as $item) {
  $vars['items'][] = [
    'title' => $item->getValue('field_title'),
    'value' => $item->getValue('field_value'),
    'suffix' => $item->getValue('field_suffix'),
  ];
}
