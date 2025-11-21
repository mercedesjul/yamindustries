<?php

use Drupal\zero_entitywrapper\Content\ContentWrapper;

/**
 * @var ContentWrapper $wrapper
 * @var array $vars
 */

$vars['brand'] = $wrapper->display()->entity('field_brand');
$vars['categories'] = $wrapper->display()->entities('field_categories');
$vars['datapoints'] = $wrapper->display()->entities('field_datapoints');
$vars['description'] = $wrapper->display()->entity('field_description');
$vars['image'] = $wrapper->display()->entity('field_image');
