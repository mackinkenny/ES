<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(AutotypesTableSeeder::class);
        $this->call(ServicetypesTableSeeder::class);
        $this->call(BuildtypesTableSeeder::class);
        $this->call(BuildmatertypesTableSeeder::class);
        $this->call(TooltypesTableSeeder::class);
        $this->call(ElectrotypesTableSeeder::class);
        $this->call(AutoTableSeeder::class);
        $this->call(ServiceTableSeeder::class);
        $this->call(BuildTableSeeder::class);
        $this->call(BuildmaterTableSeeder::class);
        $this->call(ToolTableSeeder::class);
        $this->call(ElectroTableSeeder::class);

    }
}
