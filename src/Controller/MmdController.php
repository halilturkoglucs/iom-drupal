<?php

namespace Drupal\mmd\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for mmd routes.
 */
class MmdController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {
    $mmd_data = $this->getMMD();

    return [
      '#theme' => 'mmd_data',
      '#title' => $this->t('Missing Migrants Data'),
      '#mmd_data' => $mmd_data,
    ];


  }

  public function getMMD() {
    // call API

    $url = 'https://missingmigrants.iom.int/mediterranean-figures/2022/json'; // path to your JSON
    $data = file_get_contents($url); // put the contents of the file into a variable
    $mmdjson = json_decode($data);

    return $mmdjson;
  }

}
