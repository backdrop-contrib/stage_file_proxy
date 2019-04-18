<?php

/**
 * @file
 * Hooks provided by the stage_file_proxy module.
 */

/**
 * Alter the list of paths that should be excluded by stage file proxy.
 *
 * @param array $excluded_paths
 *   An array (passed by reference) of the list of paths.
 * @param string $uri
 *   The uri of the file.
 */
function hook_stage_file_proxy_excluded_paths_alter(array &$excluded_paths, $uri) {
  // If this is a advagg path, ignore it.
  if (module_exists('advagg')) {
    $excluded_paths[] = '/advagg_';
  }
}
