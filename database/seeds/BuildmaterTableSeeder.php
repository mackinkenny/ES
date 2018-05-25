<?php

use Illuminate\Database\Seeder;

class BuildmaterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $material = new \App\Buildmater([
            'name' => 'Дерево',
            'info' => 'Большой объем деревянных досок разного вида и размера',
            'price' => 'Договорная',
            'address' => 'Турузбекова/Московская',
            'contact' => '+996 (556) 88 99 66',
            'type_id' => '1',
            'type_name' => 'Натуральные',
            'img_path' => '1526157718.jpg'
        ]);
        $material->save();

        $material = new \App\Buildmater([
            'name' => 'Цемент',
            'info' => 'Большой выбор цемента, шпатлевки и т.д',
            'price' => 'Договорная',
            'address' => 'Киевская/советская',
            'contact' => '996 700 444 555',
            'type_id' => '2',
            'type_name' => 'Исскуственные',
            'img_path' => '1526348362.jpg'
        ]);
        $material->save();
    }
}
