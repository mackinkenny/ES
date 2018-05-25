<?php

use Illuminate\Database\Seeder;

class AutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $auto = new \App\Auto([
            'name' => 'Мазда',
            'info' => 'Легковое Авто',
            'price' => '35 000$',
            'address' => 'Киевская/советская',
            'contact' => '+996 (556) 88 99 66',
            'type_id' => '2',
            'type_name' => 'Легковое авто',
            'img_path' => '1526115701.jpg'
        ]);
        $auto->save();

        $auto = new \App\Auto([
            'name' => 'Мерседес',
            'info' => 'Легковое Авто',
            'price' => '56 000$',
            'address' => 'Киевская/советская',
            'contact' => '0(700) 88 66 44',
            'type_id' => '2',
            'type_name' => 'Легковое авто',
            'img_path' => '1526535625.jpg'
        ]);
        $auto->save();

        $auto = new \App\Auto([
            'name' => 'Перевозчик',
            'info' => 'Погрузочный транспорт',
            'price' => '100 000$',
            'address' => 'Турузбекова/Московская',
            'contact' => '+996 (556) 88 99 66',
            'type_id' => '4',
            'type_name' => 'Грузовое авто',
            'img_path' => '1526170387.jpg'
        ]);
        $auto->save();

        $auto = new \App\Auto([
            'name' => 'Грузовик',
            'info' => 'Грузовое авто',
            'price' => '100 000$',
            'address' => 'Турузбекова/Московская',
            'contact' => '+996 (556) 88 99 66',
            'type_id' => '1',
            'type_name' => 'Спецтехника',
            'img_path' => '1526355751.png'
        ]);
        $auto->save();
    }
}
