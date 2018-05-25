<?php

use Illuminate\Database\Seeder;

class ElectroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $electro = new \App\Electro([
            'name' => 'Обогреватели',
            'info' => 'Обогреватели большого выбора',
            'price' => 'Договорная',
            'address' => 'Турузбекова/Московская',
            'contact' => '+996 (556) 88 99 66',
            'type_id' => '3',
            'type_name' => 'Обогреватели',
            'img_path' => '1526165119.jpg'
        ]);
        $electro->save();

        $electro = new \App\Electro([
            'name' => 'Световые лампочки',
            'info' => 'Большой ассортимент световых лампочек и светильников',
            'price' => 'Договорная',
            'address' => 'Турузбекова/Московская',
            'contact' => '+996 (556) 88 99 66',
            'type_id' => '2',
            'type_name' => 'Источники света',
            'img_path' => '1526327839.jpg'
        ]);
        $electro->save();
    }
}
