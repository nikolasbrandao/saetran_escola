<?php

use Crockett\CsvSeeder\CsvSeeder;

class gestor extends CsvSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function __construct()
    {
      $this->filename = base_path('/database/seeds/csvs/gestor.csv');
      $this->table = 'gestor';
    }
    public function run()
    {
        DB::table($this->table)->truncate();
        parent::run();
    }
}
