<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            'company' => 'GG Steelworks',
            'phone' => '09558708497', 
            'first_name' => 'Joash',
            'last_name' => 'Colomer', 
            'email' => 'colomerit111@gmail.com',
            'city' => 'Kidapawan City', 
            'province' =>'North Cotabato'
          
        ]);

    }
}
