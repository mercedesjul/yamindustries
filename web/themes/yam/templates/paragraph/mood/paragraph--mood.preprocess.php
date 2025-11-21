<?php

/**
 * @var ContentWrapperInterface $wrapper
 * @var array $vars
 */

use Drupal\zero_entitywrapper\Base\ContentWrapperInterface;

$vars['title'] = $wrapper->getValue('field_title');
$vars['button'] = $wrapper->getLinkData('field_button');
if ($wrapper->hasHostField()) {
    $host = $wrapper->getHost();
    if ($host && $host->bundle() === 'products') {
        $tags = [];
        foreach ($host->getEntitiesCollection('field_categories') as $category) {
            $tags[] = $category->getLabel();
        }
        $vars['tags'] = $tags;
    }
}
$vars['media'] = $wrapper->display()->responsiveImage('field_image', 0, 'mood_full');
$vars['full'] = $wrapper->getValue('field_full');
