<?php

use Illuminate\Database\Seeder;

class BuildtypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $buildtype = new \App\Buildtype([
            'name' => 'Частные дома',
            'category_id' => '3',
        ]);
        $buildtype->save();

        $buildtype = new \App\Buildtype([
            'name' => 'Квартиры',
            'category_id' => '3',
        ]);
        $buildtype->save();

    }
}
