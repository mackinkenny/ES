<?php

use Illuminate\Database\Seeder;

class ServicetypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $servicetype = new \App\Servicetype([
            'name' => 'Перевозки',
            'category_id' => '1',
        ]);
        $servicetype->save();

        $servicetype = new \App\Servicetype([
            'name' => 'Строительство',
            'category_id' => '1',
        ]);
        $servicetype->save();

        $servicetype = new \App\Servicetype([
            'name' => 'Отделочные работы',
            'category_id' => '1',
        ]);
        $servicetype->save();
    }
}
