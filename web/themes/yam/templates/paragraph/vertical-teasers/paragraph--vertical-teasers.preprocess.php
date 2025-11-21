<?php

/**
 * @file
 *
 * @var array $vars
 * @var Drupal\zero_entitywrapper\Base\ContentWrapperInterface $wrapper
 */

$vars['title'] = $wrapper->getValue('label');
foreach ($wrapper->getEntities('field_vertical_teasers') as $item) {
  $vars['items'][] = [
    'headline' => $item->getValue('label'),
    'image' => $item->display()->responsiveImage('field_image', 0, 'quarter'),
    'link' => $item->getLinkData('field_link'),
  ];
}