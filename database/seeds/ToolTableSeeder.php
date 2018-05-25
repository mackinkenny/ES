<?php

use Illuminate\Database\Seeder;

class ToolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tool = new \App\Tool([
            'name' => 'Ручные инструменты',
            'info' => 'Все виды инструментов',
            'price' => 'Договорная',
            'address' => 'Турузбекова/Московская',
            'contact' => '+996 (556) 88 99 66',
            'type_id' => '3',
            'type_name' => 'Ручные инструменты',
            'img_path' => '1526145777.jpg'
        ]);
        $tool->save();

        $tool = new \App\Tool([
            'name' => 'Электронные инструменты',
            'info' => 'Все виды электронных инструментов',
            'price' => '56 000$',
            'address' => 'Турузбекова/Московская',
            'contact' => '0(700) 88 66 44',
            'type_id' => '2',
            'type_name' => 'Электроинструменты',
            'img_path' => '1525984754.jpg'
        ]);
        $tool->save();
    }
}
