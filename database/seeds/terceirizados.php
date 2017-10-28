<?php

use Crockett\CsvSeeder\CsvSeeder;

class terceirizados extends CsvSeeder
{
  public function __construct()
  {
    $this->filename = base_path('/database/seeds/csvs/terceirizados.csv');
    $this->table = 'terceirizados';
  }
  public function run()
  {
      DB::table($this->table)->truncate();
      parent::run();
  }
}
