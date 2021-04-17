<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Producto',
            'description' => '',
            'photo' => 'https://rockcontent.com/es/wp-content/uploads/sites/3/2019/02/o-que-e-produto-no-mix-de-marketing.png',
            'price' => 12.1
        ]);
    }
}
