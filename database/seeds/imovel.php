<?php

use Crockett\CsvSeeder\CsvSeeder;

class imovel extends CsvSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function __construct()
    {
      $this->filename = base_path('/database/seeds/csvs/imovel.csv');
      $this->table = 'imovel';
    }
    public function run()
    {
        DB::table($this->table)->truncate();
        parent::run();
    }
}
