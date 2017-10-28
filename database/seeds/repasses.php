<?php

use Crockett\CsvSeeder\CsvSeeder;

class repasses extends CsvSeeder
{
  public function __construct()
  {
    $this->filename = base_path('/database/seeds/csvs/repasses.csv');
    $this->table = 'repasses';
  }
  public function run()
  {
      DB::table($this->table)->truncate();
      parent::run();
  }
}
