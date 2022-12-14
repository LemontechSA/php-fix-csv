<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Csv;
use App\Form;

if (isset($_FILES['csv'])) {
  $csv = new Csv();
  $csv->setFile($_FILES['csv']);
  $csv->computeTotals();
  $csv->printTable();
} else {
  $form = new Form();
  $form->create();
}