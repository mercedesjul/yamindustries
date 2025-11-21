<?php
/**
 * @var \Drupal\zero_entitywrapper\Base\ContentWrapperInterface $wrapper
 * @var array $vars
 */

$vars['title'] = $wrapper->getValue('title');
$vars['description'] = $wrapper->display()->body('field_description');
$vars['image'] = $wrapper->display()->responsiveImage('field_image',0, 'product');
$table = [];
foreach ($wrapper->getEntities('field_datapoints') as $datapoint) {
  $term = $datapoint->getEntity('field_datapoint')?->getLabel();
  $value = $datapoint->getValue('field_value');
  if (!$term || !$value) continue;
  $table[] = [$term, $value];
}
$vars['table'] = $table;
$vars['tags'] = $wrapper
  ->getEntities('field_categories')
  ->map(fn($tag) => $tag->getLabel());
