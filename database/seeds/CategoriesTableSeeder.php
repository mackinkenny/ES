<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $category = new \App\Category([
            'name' => 'Услуги',
            'text' => 'Предложения профессиональных услуг',
            'img_path' => '1525237783.png'
        ]);
        $category->save();

        $category = new \App\Category([
            'name' => 'Техника',
            'text' => 'Спецтехника и транспорт',
            'img_path' => '1525238007.png'
        ]);
        $category->save();

        $category = new \App\Category([
            'name' => 'Недвижимость',
            'text' => 'Недвижимость',
            'img_path' => '1525238025.png'
        ]);
        $category->save();

        $category = new \App\Category([
            'name' => 'Строительные материалы',
            'text' => 'Строительные материалы',
            'img_path' => '1525238037.png'
        ]);
        $category->save();

        $category = new \App\Category([
            'name' => 'Строительные инструменты',
            'text' => 'Строительные инструменты',
            'img_path' => '1525238047.png'
        ]);
        $category->save();

        $category = new \App\Category([
            'name' => 'Электроприборы',
            'text' => 'Электроприборы',
            'img_path' => '1525238056.png'
        ]);
        $category->save();
    }
}
