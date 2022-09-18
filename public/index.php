<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Csv;
use App\Form;

if (isset($_FILES['csv'])) {
  $csv = new Csv();
  $csv->setFile($_FILES['csv']);
  $before = microtime(true);
  $csv->computeTotals();
  $after = microtime(true);
  $csv->printTable();
  echo $after-$before;
  
} else {
  $form = new Form();
  $form->create();
}