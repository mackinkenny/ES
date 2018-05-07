<?php

use Illuminate\Database\Seeder;

class AutotypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $autotype = new \App\Autotype([
            'name' => 'Спецтехника',
            'category_id' => '2',
        ]);
        $autotype->save();

        $autotype = new \App\Autotype([
            'name' => 'Легковые авто',
            'category_id' => '2',
        ]);
        $autotype->save();

        $autotype = new \App\Autotype([
            'name' => 'Внедорожники',
            'category_id' => '2',
        ]);
        $autotype->save();

        $autotype = new \App\Autotype([
            'name' => 'Грузовое авто',
            'category_id' => '2',
        ]);
        $autotype->save();
    }
}
