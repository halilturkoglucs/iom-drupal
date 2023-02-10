<?php

namespace Drupal\mmd\Controller;

class Migrant {

  public string $id;
  public string $region;
  public string $reportDate;
  public string $fieldYear;
  public string $month;
  public string $numberDead;
  public string $numberMissing;
  public string $totalDeadMissing;
  public string $numberOfSurvivors;
  public string $numberOfFemale;
  public string $numberOfMale;
  public string $numberOfChildren;
  public string $locationOfDeath;
  public string $informationSource;
  public string $reliability;
  public string $migrantRoute;
  public string $url;
  public string $unsdRegion;
  public string $sourceQuality;
  public string $latitude;
  public string $longtitude;
  public string $niD;
  public string $causeOfDeath;

//  public function __construct(string $id, string $region, string $reportDate, string $fieldYear, string $month, string $numberDead, string $numberMissing, string $totalDeadMissing, string $numberOfSurvivors, string $numberOfFemale, string $numberOfMale, string $numberOfChildren, string $locationOfDeath, string $informationSource, string $reliability, string $migrantRoute, string $url, string $unsdRegion, string $sourceQuality, string $latitude, string $longtitude, string $niD, string $causeOfDeath)
//  {
//    $this->id = $id;
//    $this->region = $region;
//    $this->reportDate = $reportDate;
//    $this->fieldYear = $fieldYear;
//    $this->month = $month;
//    $this->numberDead = $numberDead;
//    $this->numberMissing = $numberMissing;
//    $this->totalDeadMissing = $totalDeadMissing;
//    $this->numberOfSurvivors = $numberOfSurvivors;
//    $this->numberOfFemale = $numberOfFemale;
//    $this->numberOfMale = $numberOfMale;
//    $this->numberOfChildren = $numberOfChildren;
//    $this->locationOfDeath = $locationOfDeath;
//    $this->informationSource = $informationSource;
//    $this->reliability = $reliability;
//    $this->migrantRoute = $migrantRoute;
//    $this->url = $url;
//    $this->unsdRegion = $unsdRegion;
//    $this->sourceQuality = $sourceQuality;
//    $this->latitude = $latitude;
//    $this->longtitude = $longtitude;
//    $this->niD = $niD;
//    $this->causeOfDeath = $causeOfDeath;
//  }
  public function __construct(string $id, string $region)
  {
    $this->id = $id;
    $this->region = $region;
  }

}

?>

