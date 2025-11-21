<?php

use Drupal\zero_entitywrapper\Content\ContentWrapper;
/**
 * @var ContentWrapper $wrapper
 * @var array $vars
 */

$vars['title'] = $wrapper->getValue('field_title');
$vars['body'] = $wrapper->getMarkup('field_body');
