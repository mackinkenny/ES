<?php

use Illuminate\Database\Seeder;

class TooltypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tooltype = new \App\Tooltype([
            'name' => 'Электроинструменты',
            'category_id' => '5',
        ]);
        $tooltype->save();

        $tooltype = new \App\Tooltype([
            'name' => 'Ручные инструменты',
            'category_id' => '5',
        ]);
        $tooltype->save();
    }
}
