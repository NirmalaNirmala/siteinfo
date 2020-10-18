<?php
/**
 * @return
 * Contains \Drupal\drupalbook\Controller\DrupSiteinfo.
 */
  
namespace Drupal\drup_siteinfo\Controller;
  
/**
 * Provides route responses for the DrupalBook module.
 */
class DrupSiteinfo {
  
  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function content() {
    $element = array(
      '#markup' => 'Hello World!',
    );
    return $element;
  }
  
}