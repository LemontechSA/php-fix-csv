<?php

namespace App;

class Csv
{
  private array $csv     = [];
  private array $headers = [];
    
    public function printTable(): void
  {
    include('../app/views/table.php');
  }

  public function setFile(array $file): void
  {
    $this->csv     = array_map('str_getcsv', file($file['tmp_name']));
    $this->headers = &$this->csv[0];
  }

  public function computeTotals(): void
  {
      $taxes = $this->sumColumn('tax');
      $rates = $this->sumColumn('rate');
      $total = $taxes + $rates;
      array_push($this->csv,
          ['', '', 'Subtotal', $rates, $taxes],
          ['', '', 'Total', '', $total]
      );
  }
  
  private function sumColumn(string $column): int
  {
      return array_sum(
          array_slice(
              array_column($this->csv, array_search($column, $this->headers)), 1
          )
      );
  }
}