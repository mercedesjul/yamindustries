<?php

use Drupal\zero_entitywrapper\Base\ContentWrapperInterface;

/**
 * @var ContentWrapperInterface $wrapper
 * @var array $vars
 */

$vars['url'] = $wrapper->url();
$mood = $wrapper->getEntity('field_mood');
if ($mood) {
    $vars['image'] = $mood->display()->responsiveImage('field_image', 0, 'brand');
}
$vars['title'] = $wrapper->getValue('title');
$vars['description'] = $wrapper->display()->body('field_description');
