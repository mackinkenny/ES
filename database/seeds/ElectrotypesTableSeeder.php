<?php

use Illuminate\Database\Seeder;

class ElectrotypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $electrotype = new \App\Electrotype([
            'name' => 'Обогреватели',
            'category_id' => '6',
        ]);
        $electrotype->save();

        $electrotype = new \App\Electrotype([
            'name' => 'Источники света',
            'category_id' => '6',
        ]);
        $electrotype->save();
    }
}
