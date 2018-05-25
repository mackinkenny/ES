<?php

use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $service = new \App\Service([
            'name' => 'Перевозка груза',
            'info' => 'Перевозка груза любого типа по городу Бишкек',
            'price' => '100 000$',
            'address' => 'Турузбекова/Московская',
            'contact' => '+996 (556) 88 99 66',
            'type_id' => '1',
            'type_name' => 'Перевозки',
            'img_path' => '1525972581.png'
        ]);
        $service->save();

        $service = new \App\Service([
            'name' => 'Ремонтники',
            'info' => 'Предоставляем услуги качественного ремонта жилых домов',
            'price' => 'Договорная',
            'address' => 'Турузбекова/Московская',
            'contact' => '+996 (556) 88 99 66',
            'type_id' => '3',
            'type_name' => 'Отделочные работы',
            'img_path' => '1526605586.jpg'
        ]);
        $service->save();
    }
}
