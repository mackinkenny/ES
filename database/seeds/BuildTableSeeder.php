<?php

use Illuminate\Database\Seeder;

class BuildTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $build = new \App\Build([
            'name' => 'Частный дом',
            'info' => 'Частный дом 56кв/м + двор',
            'price' => '100 000$',
            'address' => 'Турузбекова/Московская',
            'contact' => '+996 (556) 88 99 66',
            'type_id' => '1',
            'type_name' => 'Частные дома',
            'img_path' => '1525990698.jpg'
        ]);
        $build->save();

        $build = new \App\Build([
            'name' => 'Квартиры',
            'info' => 'Квартиры 72 кв/м с ремонтом и мебелью    ',
            'price' => 'Договорная',
            'address' => 'Киевская/советская',
            'contact' => '0(700) 88 66 44',
            'type_id' => '2',
            'type_name' => 'Квартиры',
            'img_path' => '1526071029.jpg'
        ]);
        $build->save();
    }
}
