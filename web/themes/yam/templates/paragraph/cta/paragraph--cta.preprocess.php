<?php

/**
 * @file
 *
 * @var array $vars
 * @var Drupal\zero_entitywrapper\Base\ContentWrapperInterface $wrapper
 */

$vars['headline'] = $wrapper->getValue('field_title');
$vars['body'] = !$wrapper->isEmpty('field_body') ? $wrapper->display()->body('field_body') : NULL;
$vars['image'] = !$wrapper->isEmpty('field_image') ? $wrapper->display()->responsiveImage('field_image', 0, 'domino_teaser') : NULL;
$vars['reversed'] = !$wrapper->isEmpty('field_reversed') ? $wrapper->getValue('field_reversed') : NULL;
if (!$wrapper->isEmpty('field_link')) {
  $vars['link'] = $wrapper->getLinkData('field_link');
}

