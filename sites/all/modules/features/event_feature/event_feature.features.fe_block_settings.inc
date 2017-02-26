<?php
/**
 * @file
 * event_feature.features.fe_block_settings.inc
 */

/**
 * Implements hook_default_fe_block_settings().
 */
function event_feature_default_fe_block_settings() {
  $export = array();

  $export['version'] = '2.0';

  $export['event-upcomming_events'] = array(
    'cache' => 1,
    'custom' => 0,
    'delta' => 'upcomming_events',
    'module' => 'event',
    'node_types' => array(),
    'pages' => '<front>',
    'roles' => array(),
    'themes' => array(
      'bartik' => array(
        'region' => 'content',
        'status' => 1,
        'theme' => 'bartik',
        'weight' => 0,
      ),
      'seven' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'seven',
        'weight' => 0,
      ),
    ),
    'title' => '',
    'visibility' => 1,
  );

  return $export;
}
