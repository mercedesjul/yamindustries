<?php

/**
 * @file
 * Accordeon preprocess hook.
 *
 * @var array $vars
 * @var Drupal\zero_entitywrapper\Base\ContentWrapperInterface $wrapper
 */

$vars['headline'] = !$wrapper->isEmpty('field_title') ? $wrapper->getValue('field_title') : NULL;

foreach ($wrapper->getEntities('field_accordions') as $item) {
  $vars['items'][] = [
    'headline' => $item->getValue('field_title'),
    'subline' => $item->getValue('field_subline'),
    'body' => $item->getMarkup('field_body'),
    'link' => $item->getLinkData('field_link'),
  ];
}
