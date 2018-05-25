<?php

use Illuminate\Database\Seeder;

class BuildmatertypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $materialtype = new \App\Buildmatertype([
            'name' => 'Натуральные',
            'category_id' => '4',
        ]);
        $materialtype->save();

        $materialtype = new \App\Buildmatertype([
            'name' => 'Исскуственные',
            'category_id' => '4',
        ]);
        $materialtype->save();
    }
}
